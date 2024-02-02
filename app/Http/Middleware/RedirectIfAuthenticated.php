<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }

            if ($guard='admin' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
            }

            if ($guard='student' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::STUDENT_DASHBOARD);
            }

            if ($guard='staff' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::STAFF_DASHBOARD);
            
            }

            if ($guard='cod' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HEAD_DEPT_OF_DASHBOARD);
            }
        }

        return $next($request);
    }
}
