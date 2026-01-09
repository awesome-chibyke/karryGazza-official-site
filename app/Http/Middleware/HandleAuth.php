<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class HandleAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $key = "login-attempt-".md5(request()->ip());

        $value = Cache::get($key);

        if(!isset($value)){

           return redirect()->route('login')->with('error', 'Please login to access this page.'); 

        }

        $request->user_data = json_decode($value);

        return $next($request);
    }
}
