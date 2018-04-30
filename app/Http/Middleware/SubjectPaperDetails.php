<?php

namespace App\Http\Middleware;

use Closure;

class SubjectPaperDetails
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
        'name' => 'required',
        'paperCode' => 'required',
        'description' => 'required',
        'semester' => 'required|max:1',
        'credit' => 'required', 
        'courseId' => 'required',
        ]);
        
        return $next($request);
    }
}
