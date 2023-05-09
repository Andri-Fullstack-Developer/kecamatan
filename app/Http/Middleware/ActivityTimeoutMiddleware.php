<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class ActivityTimeoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();
        $user->setRememberToken(null);
        $maxIdleTimeInMinutes = 1; // waktu idle dalam menit

        if (Auth::check()) {
            DB::table('singup')->get();
            $lastActivity = Carbon::parse(Auth::user()->waktu); // Parse the string value into a Carbon instance
            //dd($lastActivity);
            if ($lastActivity !== null && $lastActivity->addMinutes($maxIdleTimeInMinutes) < now()) {
                Session::flush();
                Auth::logout();

                return redirect('/login')->with('error', 'Sesi telah berakhir karena tidak ada aktivitas dalam ' . $maxIdleTimeInMinutes . ' menit.');
            }
            Auth::user()->update(['waktu' => now()->timezone('Asia/Jakarta')->format('H:i:s')]);
        
        }
        return $next($request);
        
    }
}
