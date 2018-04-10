<?php

namespace App\Http\Middleware\Teacher\ClassDetails;

use Closure;

class SubjectDetailMiddleware
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
        
        $subject= $request->subject;
        $noOfClasses = $request->noOfClasses;
        $teacherid = $request->teacherid;
        
        if($subject == null || $noOfClasses == null || $teacherid == null)
        {
            return back()->withInput();
        }
        
           return $next($request);
    }
}
