<?php

namespace App\Http\Middleware;

use Closure;
use Flash;

class AtLeastAdmin
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
        if ($request->user() != null && $request->user()->is(["admin", "developer"])) {
            return $next($request);
        }

        Flash::error("Bu sayfayı görme yetkiniz yok.");

        return back();
    }
}
