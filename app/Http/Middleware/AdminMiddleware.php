<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'Admin') {
                return View('Admin/Dashboard');
            } else {
                return (redirect('/#')->with('message', 'Access denied'));
            }
        } else {
            return (redirect('/login')->with('message', 'Access denied'));
        }
        return $next($request);
    }
}
