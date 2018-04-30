<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        $request->validate([
        'username' => 'required',
        'password' => 'required',
        'type' => 'required',
        'firstName' => 'required',
        'lastName' => 'required', 
        'email' => 'required|email',
        'mobile' => 'required|max:10',
        'addressLine1' => 'required',
        'addressLine2' => 'required',
        'pincode' => 'required',
        'accessMappingId' => 'required',
        ]);
        
        return $next($request);
    }
}
