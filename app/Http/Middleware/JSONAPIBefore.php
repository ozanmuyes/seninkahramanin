<?php

namespace App\Http\Middleware;

use Closure;

class JSONAPIBefore
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
// dd($request->header("Accept"));
        if ($request->header("Content-Type") != "application/vnd.api+json") {
            return abort(415);
        }

        return $next($request);
    }
}
