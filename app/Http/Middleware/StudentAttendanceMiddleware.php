<?php

namespace App\Http\Middleware;

use Closure;

class StudentAttendanceMiddleware
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
        $request->validate([
        'studentid' => 'required',
        'semester' => 'required',
        'date' => 'required|date',
        'hour1' => 'required',
        'hour2' => 'required',
        'hour3' => 'required',
        'hour4' => 'required',
        'hour5' => 'required',
        'hour6' => 'required',
        'hour7' => 'required',            
        ]);
        
        return $next($request);
    }
}
