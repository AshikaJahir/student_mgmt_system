<?php

namespace App\Http\Middleware;

use Closure;

class CourseDetailsMiddleware
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
        'course_name' => 'required',
        'course_code' => 'required',
        'description' => 'required',
        ]);
        
        return $next($request);
    }
}
