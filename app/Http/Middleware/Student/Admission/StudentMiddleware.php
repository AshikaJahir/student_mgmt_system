<?php

namespace App\Http\Middleware\Student\Admission;

use Closure;

class StudentMiddleware
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
        $fathername = $request->fathername;
        $class = $request->class;
        $contact = $request->contact;
        
        if($firstname == null || $lastname == null || $fathername == null || $class == null || $contact == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
