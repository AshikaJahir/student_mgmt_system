<?php

namespace App\Http\Middleware\Admin;

use Closure;

class AdminMiddleware
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
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $gender = $request->gender;
        $contact = $request->contact;
        
        if($firstname == null || $lastname == null || $gender == null || $contact == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
