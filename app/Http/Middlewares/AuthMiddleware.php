<?php

namespace App\Http\Middlewares;

use Closure;
use Mate\Auth\Auth;
use Mate\Http\Middleware;
use Mate\Http\Request;
use Mate\Http\Response;

class AuthMiddleware implements Middleware {
    public function handle(Request $request, Closure $next): Response {
        if (Auth::isGuest()) {
            return Response::redirect("/login");
        }

        return $next($request);
    }
}
