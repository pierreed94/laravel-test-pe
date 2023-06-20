<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // dd(Auth::user()->role);
        if (Auth::user() && Auth::user()->role == 'admin') {
            return $next($request);
        }else{
            abort(403, 'Non autorisé à voir ce contenu.');
        }
    }
}
