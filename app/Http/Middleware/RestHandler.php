<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Routing\TerminableMiddleware;

class RestHandler
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
        return $next($request);
    }

	public function terminate($request, $response)
	{
	}
}
