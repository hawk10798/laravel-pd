<?php

namespace App\Http\Middleware;

use Closure;

class AnnoyingMiddleware
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
        echo '<script language="javascript">';
        echo 'alert("SUPER ANNOYING MIDDLEWARE ALERT")';
        echo '</script>';

        return $next($request);
    }
}
