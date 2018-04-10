<?php

namespace App\Http\Middleware\Teacher\ClassDetails;

use Closure;

class ClassDetailMiddleware
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
        $physics = $request->physics;
        $chemistry = $request->chemistry;
        $maths = $request->maths;
        
        if($std == null || $physics==null || $chemistry==null || $maths == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
