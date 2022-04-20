<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $token, string $foo)
    {
        // abort_if(true, 500);
        // abort_unless($user->admin, 500);

        // когда закешир. конфиги env() будет возращать NULL
        // $token = env('TOKEN');
        // $token = config('example.token');

        if ($request->input('token') === $token) {
            return $next($request);
        }

        abort(403);
    }
}
