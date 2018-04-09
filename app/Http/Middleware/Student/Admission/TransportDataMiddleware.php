<?php

namespace App\Http\Middleware\Student\Admission;

use Closure;

class TransportDataMiddleware
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
        $transportmode = $request->transportmode;
        $fee = $request->fee;
        $studentid = $request->studentid;
        
        if($transportmode == null || $fee == null || $studentid == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
