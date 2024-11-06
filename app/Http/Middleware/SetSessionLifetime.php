<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class SetSessionLifetime
{
    public function handle($request, Closure $next)
    {
        // Check if the 'remember' parameter is present
        if ($request->has('remember')) {
            // Set the session lifetime to 30 days
            Config::set('session.lifetime', 43200);
            session()->put('remember_me', true);
        } else {
            // Set the session lifetime to 2 hours
            Config::set('session.lifetime', 120);
            session()->put('remember_me', false);
        }

        return $next($request);
    }
}

