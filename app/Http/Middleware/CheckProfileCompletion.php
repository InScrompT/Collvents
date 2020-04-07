<?php

namespace App\Http\Middleware;

use App\Profile;
use Closure;

class CheckProfileCompletion
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
        if (auth()->guest()) {
            return $next($request);
        }

        if (Profile::whereUserId(auth()->id())->exists()) {
            return $next($request);
        }

        if ($request->fullUrl() === route('profile.edit')) {
            return $next($request);
        }

        return redirect()
            ->to(route('profile.edit'))
            ->with('success', 'Tell us more about yourself before getting started');
    }
}
