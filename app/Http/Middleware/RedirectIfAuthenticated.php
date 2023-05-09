<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        // if (Auth::check()) {
        //     $lastActive = Auth::user()->waktu;
        //     $diffInMinutes = now()->timezone('Asia/Jakarta')->format('H:i:s')->diffInMinutes($lastActive);
        //     if ($diffInMinutes > 1) {
        //         Auth::logout();
        //         return redirect('/login')->with('error', 'Sesi telah berakhir.');
        //     } else {
        //         Auth::user()->update(['waktu' => now()->timezone('Asia/Jakarta')->format('H:i:s')]);
        //     }
        // }

        return $next($request);
    }
}
