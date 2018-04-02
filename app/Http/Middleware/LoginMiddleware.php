<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
        
        //If any of the field is empty, it redirects back to the same page
        if($email == null || $password == null || $role == null)
        {
            return back()->withInput();
        }    
        return $next($request);
    }
}
