<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $levels = array_slice(\func_get_args(), 2);

        foreach ($levels as $level){
            $user = Auth::user()->level;
            if ($user == $level) {
                return $next($request);
                
            }
        }
        return \redirect('error');
    }
}
