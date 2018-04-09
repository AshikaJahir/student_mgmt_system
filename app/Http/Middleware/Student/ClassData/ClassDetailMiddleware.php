<?php

namespace App\Http\Middleware\Student\ClassData;

use Closure;

class ClassDetailmiddleware
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
        $std= $request->std;
        $classTeacher = $request->classTeacher;
        $noOfSubjects = $request->noOfSubjects;
        $studentid = $request->studentid;
        
        if($std == null || $classTeacher==null || $noOfSubjects==null || $studentid == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
