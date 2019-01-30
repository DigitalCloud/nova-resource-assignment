<?php

namespace DigitalCloud\NovaResourceAssignment\Http\Middleware;

use DigitalCloud\NovaResourceAssignment\NovaResourceStatus;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaResourceStatus::class)->authorize($request) ? $next($request) : abort(403);
    }
}
