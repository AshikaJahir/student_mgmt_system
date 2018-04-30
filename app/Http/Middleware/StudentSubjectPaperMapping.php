<?php

namespace App\Http\Middleware;

use Closure;

class StudentSubjectPaperMapping
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
        'studentId' => 'required',
        'paperId' => 'required',
        'type' => 'required',
        'marks' => 'required|max:3',
        'semester' => 'required|max:1',       
        ]);
        
        return $next($request);
    }
}
