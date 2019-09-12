<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($request->session()->has('admin'));
        if(!$request->session()->exists('admin')) {
            return redirect('admin/login');
        }

        return $next($request);
    }
}
