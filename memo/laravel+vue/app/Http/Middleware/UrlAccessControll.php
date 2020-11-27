<?php

namespace App\Http\Middleware;

use Closure;

class UrlAccessControll
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
        // 認証アカウントがRequestURLに対してアクセス権限を有するか確認
        if (\Auth::user()->isAllow(request()->server->get('REQUEST_URI')) === false) {
            \App::abort(403);
        }
        return $next($request);
    }
}
