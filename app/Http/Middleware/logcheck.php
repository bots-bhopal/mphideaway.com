<?php

namespace App\Http\Middleware;

use Closure;
class logcheck
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
    
        if(empty(\Session::get('logdata')))
        {
            return Redirect('login'); 
        }
        return $next($request);
    }
}
