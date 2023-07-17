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
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'Admin':
                    return redirect('/Admin/Dashboard');
                    break;
                case 'user':
                    return redirect('/StaffMembers/dashboard');
                    break;
                case 'TeamLeader':
                    return redirect('/TeamLeader/Dashboard');
                    break;
                case 'Technician':
                    return redirect('/Technicians/Dashboard');
                    break;
                default:
                    return redirect('/#');
                    break;
            }
        }
        return $next($request);
    }
}
