<?php

namespace App\Providers;

use App\Guards\ApiTokenGuard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::extend('api_token', function ($app, $name, array $config) {
            return new ApiTokenGuard(
                Auth::createUserProvider($config['provider']),
                $app['request']
            );
        });
    }

    public function register()
    {
        //
    }
}