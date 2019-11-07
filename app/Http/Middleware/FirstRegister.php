<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class FirstRegister
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
        $user = User::all();
        if(count($user))
            return redirect()->route('register')->withErrors(['First Admin Already Created', 'You Can Register Second Admin Only']);

        return $next($request);
    }
}
