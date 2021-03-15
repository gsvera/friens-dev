<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class LangLocale
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
        if ($request->is('en') || $request->is('en/*'))
			App::setlocale('en');
		else
			App::setlocale('es');
        return $next($request);
    }
}
