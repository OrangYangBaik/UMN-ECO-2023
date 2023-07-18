<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateParticipant
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('participant')->check()) {
            return $next($request);
        }

        return redirect('/loginUser');
    }
}

