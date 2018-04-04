<?php

namespace App\Http\Middleware;

use Closure;

class ForgotPwdMiddleware
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
        $newPassword = $request->newPassword;
        $role = $request->role; 
            
          
      //If any of the field is empty, it redirects back to the same page
        if($email == null || $newPassword == null || $role == null)
        {
            return back()->withInput();
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
