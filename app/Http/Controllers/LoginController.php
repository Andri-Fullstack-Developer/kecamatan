<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;


class LoginController extends Controller
{
    public function index(){
        return view('Login.singin');
    }

    public function post_login(Request $request){
        // // Ambil data inputan login dari form
        //dd($request->all());
        $username = $request->input('username');
        $password = $request->input('password');
        $singup = $request->validate(['username' => 'required', 'password' => 'required']);

        // // Verifikasi apakah data login sesuai dengan data di dalam tabel "singup"
        $user = DB::table('singup')->where('username', $username)->where('password', $password)->first();

        if(Auth::attempt($singup)){
            $request->session()->regenerate();
            $now = now()->timezone('Asia/Jakarta')->format('H:i:s');
            DB::table('singup')->where('id', Auth::user()->id)->update(['waktu' => $now]);

            return redirect()->route('dashboard');
        }
        
        //return('anda ggal');
        return redirect()->route('login')->with('error', 'Username atau password salah.');
    }



    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/singin'); 
    }
}
