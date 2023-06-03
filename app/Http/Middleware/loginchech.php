<?php

namespace App\Http\Middleware;

use Closure;

class loginchech
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
        if(!empty(\Session::get('logdata')))
        {
            return Redirect('admin'); 
        }
        return $next($request);
    }
}
