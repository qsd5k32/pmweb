<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Handle user login request
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find the user by username
        $user = User::where('Username', $request->username)->first();

        // return response()->json([
        //     'user' => $user
        // ]);
        
        if (!$user) {        
            throw ValidationException::withMessages([
                'username' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Check if account is locked or disabled
        if (!$user->isActive()) {
            throw ValidationException::withMessages([
                'username' => ['This account is locked or disabled.'],
            ]);
        }
        
        // Verify password - using the custom hash matching implementation
        if (!$this->verifyPassword($request->password, $user->Password)) {
            // Increment failed attempts logic could be added here
            throw ValidationException::withMessages([
                'username' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Update login details
        $user->touchLastLogin();
        
        // Generate a new API token and update it in the database
        $token = Str::uuid()->toString();
        $user->APIRestToken = $token;
        $user->APIRestTokenDate = now();
        $user->save();

        return response()->json([
            'user' => $user->only(['Id', 'Username', 'Email', 'FirstName', 'LastName']),
            'token' => $token,
        ]);
    }

    /**
     * Handle user logout request
     */
    public function logout(Request $request)
    {
        // Get authenticated user
        $user = auth()->user();
        
        if ($user) {
            // Invalidate the token
            $user->APIRestToken = null;
            $user->APIRestTokenDate = null;
            $user->save();
        }

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Get authenticated user details
     */
    public function me(Request $request)
    {
        return response()->json(['user' => $request->user()]);
    }

    /**
     * Verify password against the stored hash
     */
    protected function verifyPassword($inputPassword, $storedHash)
    {
        // Your existing database uses uppercase hex SHA-256
        // Let's recreate that hash
        $calculatedHash = strtoupper(hash('sha256', $inputPassword));
        
        return $calculatedHash === $storedHash;
    }
}