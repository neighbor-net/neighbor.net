<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth as Middleware;

class AuthenticateWithBasicAuth extends Middleware
{
    // @Override
    public function handle($request, Closure $next, $guard = null, $field = null)
    {
        $this->auth->guard($guard)->basic($field ?: 'username');

        return $next($request);
    }
}
