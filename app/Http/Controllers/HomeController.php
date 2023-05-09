<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Authenticatable;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cek()
    {
        // $user = Auth::user();
        // $user->setRememberToken(null);
        // if (Auth::check()) {
        // $lastActive = Auth::user()->waktu;
        // $diffInMinutes = now()->timezone('Asia/Jakarta')->diffInSeconds($lastActive);
           
        // if ($diffInMinutes > 10) {  
        //     // Auth::user()->removeRememberToken();
        //     Session::flush(); 
        //     Auth::logout();
        //     return redirect('/singin')->with('error', 'Sesi telah berakhir.');
        // } else {
            
        //     //Auth::user()->update(['waktu' => now()->timezone('Asia/Jakarta')->format('H:i:s')]);
        // }
        //}
        $user = Auth::user();
        $user->setRememberToken(null);
        $maxIdleTimeInSeconds = 50; // waktu idle dalam menit

        if (Auth::check()) {
            DB::table('singup')->get();
            $lastActivity = Carbon::parse(Auth::user()->waktu); // Parse the string value into a Carbon instance
            //dd($lastActivity);
            if ($lastActivity !== null && $lastActivity->addMinutes($maxIdleTimeInSeconds) < now()) {
                Session::flush();
                Auth::logout();

                return redirect('/singin')->with('error', 'Sesi telah berakhir karena tidak ada aktivitas dalam ' . $maxIdleTimeInSeconds . ' menit.');
            }
            //Auth::user()->update(['waktu' => now()->timezone('Asia/Jakarta')->format('H:i:s')]);
        
        }
    }

    
    

    public function index()
    {
        
        $ho = DB::table('home')->get();
       // $title = "dashboard";
       $name = Auth::user()->name;
       $jabatan = Auth::user()->jabatan;
       $username = Auth::user()->username;
       $this->cek();
       $menu = 'home';
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }



    public function jabatan(){
        $ho = DB::table('jabatan')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'penjabat';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function organisasi(){
        $ho = DB::table('organisasi')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'organisasi';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function visi_misi(){
        $ho = DB::table('visimisi')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'visi&misi';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function berita(){
        $ho = DB::table('berita')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'berita';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function agenda(){
        $ho = DB::table('agenda')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'agenda';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function singup(){
        $ho = DB::table('singup')->get();
        $name = Auth::user()->name;
        $username = Auth::user()->username;
        $jabatan = Auth::user()->jabatan;
        $menu = 'singup';
        // $this->cek();
        return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
    }

    public function home(){
        $home = DB::table('home')->select('image')->get();
        return view('welcome', compact('home')); 
    }


  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
            'image.required' => 'File gambar harus diisi',
            'image.mimes' => 'Format file gambar harus png, jpg, atau jpeg'
        ]);

        $name_home = $request->image->getClientOriginalName();
        $img = $request->file('image')->storeAs('images', $name_home);
        //$path = $request->image->storeAs('images', $name_home);

        DB::table('home')->insert([
            'image' => $name_home,
        ]);

        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah foto.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_home(string $id, Request $request)
    {
        
        $foto = $request->input('img');
        Storage::disk('public')->delete($foto);
        
        DB::table('home')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
