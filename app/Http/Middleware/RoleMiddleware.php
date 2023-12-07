<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = \Auth::user();

        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }
    
        // Handle unauthorized access (e.g., redirect to a different page)
        return redirect('/unauthorized');
    }
}
