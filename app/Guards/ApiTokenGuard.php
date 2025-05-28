<?php

namespace App\Guards;

use App\Models\User;
use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\UserProvider;

class ApiTokenGuard implements Guard
{
    use GuardHelpers;

    protected $request;
    protected $inputKey;
    protected $tokenExpiration;

    public function __construct(UserProvider $provider, Request $request, $inputKey = 'api_token', $tokenExpiration = 7)
    {
        $this->provider = $provider;
        $this->request = $request;
        $this->inputKey = $inputKey;
        $this->tokenExpiration = $tokenExpiration; // Token expiration in days
    }

    public function user()
    {
        if (!is_null($this->user)) {
            return $this->user;
        }

        $token = $this->getTokenForRequest();

        if (!empty($token)) {
            $user = User::where('APIRestToken', $token)->first();
            
            if ($user) {
                // Check if token is expired
                $tokenDate = new \DateTime($user->APIRestTokenDate);
                $now = new \DateTime();
                $interval = $tokenDate->diff($now);
                $daysDiff = $interval->days;
                
                if ($daysDiff <= $this->tokenExpiration) {
                    $this->user = $user;
                    return $this->user;
                }
            }
        }

        return null;
    }

    public function validate(array $credentials = [])
    {
        return !is_null($this->user());
    }

    public function getTokenForRequest()
    {
        $token = $this->request->bearerToken();

        if (empty($token)) {
            $token = $this->request->input($this->inputKey);
        }

        return $token;
    }
}