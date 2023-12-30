<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotLoggedIn
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/products/login'); // Redirect to your login route
        }

        return $next($request);
    }
}
