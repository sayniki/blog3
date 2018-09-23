<?php

namespace App\Http\Middleware;

use Closure;

class menu 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private function get_menu()
    {
        
    }
    public function handle($request, Closure $next)
    {
        get_menu();
        return $next($request);
    }
}
