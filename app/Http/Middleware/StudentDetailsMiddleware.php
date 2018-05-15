<?php

namespace App\Http\Middleware;

use Closure;

class StudentDetailsMiddleware
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
        'courseid' => 'required',
        'userid' => 'required',
        'contact' => 'required|max:10',
        'yearOfJoin' => 'required',
        'yearOfPassout' => 'required',       
        ]);
        
        return $next($request);
    }
}
