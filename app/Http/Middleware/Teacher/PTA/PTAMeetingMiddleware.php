<?php

namespace App\Http\Middleware\Teacher\PTA;

use Closure;

class PTAMeetingMiddleware
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
        $std = $request->std;
        $date = $request->date;
        $organizer = $request->organizer;
        
        if($std == null || $date == null || $organizer == null)
        {
            return back()->withInput();
        }
        return $next($request);
    }
}
