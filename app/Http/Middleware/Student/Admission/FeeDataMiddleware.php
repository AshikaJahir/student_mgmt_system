<?php

namespace App\Http\Middleware\Student\Admission;

use Closure;

class FeeDataMiddleware
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
        $feeterm= $request->feeterm;
        $studentid = $request->studentid;
        
        if($feeterm == null || $studentid == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
