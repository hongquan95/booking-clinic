<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request request
     * @param \Closure                 $next    next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('web-admin')->user();
        if (Auth::check() && $user && $user->isSuperAdmin()) {
            return $next($request);
        }
        return redirect('home');
    }
}
