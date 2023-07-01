<?php

namespace App\Http\Controllers;

use pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        if(Auth::check()){
            $name = Auth::user()->name;
            $users = DB::table('home')->Paginate(3);
            $jabatan = Auth::user()->jabatan;
            $username = Auth::user()->username;
           //$this->cek();
            $menu = 'home';
            return view('dasboard.dasboard', compact('users', 'menu', 'name', 'jabatan', 'username'));
        }
        return redirect()->route('login');
    }

    public function NameDesa(){
        if(Auth::check()){
            $ho = DB::table('namadesa')->Paginate(5);
            $name = Auth::user()->name;
            $jabatan = Auth::user()->jabatan;
            $username = Auth::user()->username;
            $menu = 'nameDs';
            return view('dasboard.dasboard',compact('ho','menu','name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function jabatan(){
        if (Auth::check()){
            $ho = DB::table('jabatan')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            
            $menu = 'penjabat';
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function organisasi()
    {
        if (Auth::check()) {

            $ho = DB::table('organisasi')->get();
            $user = Auth::user();
            $name = $user->name;
            $username = $user->username;
            $jabatan = $user->jabatan;
            $menu = 'organisasi';
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        
        return redirect()->route('login');
    }

    public function visi_misi(){
        if (Auth::check()){

            $ho = DB::table('visimisi')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'visi&misi';

            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function berita(){
        if(Auth::check()){
            $ho = DB::table('berita')->Paginate(6);
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'berita';
            // $this->cek();
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function agenda(){
        if(Auth::check()){
            $ho = DB::table('agenda')->orderBy('id', 'desc')->Paginate(6);
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'agenda';
            // $this->cek();
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function program(){
        if(Auth::check()){
            $ho = DB::table('programskpd')->orderBy('id', 'desc')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'program';
            // $this->cek();
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }
    public function Datapengadu(){
        if(Auth::check()){
            $ho = DB::table('pengaduan')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'datapengaduan';
            // $this->cek();
            return view('dasboard.dasboard', compact('ho','menu', 'name', 'jabatan', 'username'));
        }
        return redirect()->route('login');
        
    }

    public function data_ektp()
    {
        if(Auth::check()){
            $ektp = DB::table('pendaftaran_ektp')->orderBy('id', 'desc')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'data_pendaftran_ektp';
    
            return view('dasboard.dasboard', compact('menu', 'name', 'jabatan', 'username', 'ektp'));
        }
        return redirect()->route('login'); 
    }

    public function foto(){
        if(Auth::check()){
            $foto = DB::table('foto')->orderBy('id', 'desc')->Paginate(7);
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'foto';
            // $this->cek();
            return view('dasboard.dasboard', compact('foto', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function videoS(){
        if(Auth::check()){
            $video = DB::table('video')->orderBy('id', 'desc')->Paginate(7);
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'video';
            // $this->cek();
            return view('dasboard.dasboard', compact('video', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function singup(){
        if(Auth::check()){
            $ho = DB::table('singup')->get();
            $name = Auth::user()->name;
            $username = Auth::user()->username;
            $jabatan = Auth::user()->jabatan;
            $menu = 'singup';
            // $this->cek();
            return view('dasboard.dasboard', compact('ho', 'menu', 'name', 'jabatan', 'username'));
        }
        return \redirect()->route('login');
    }

    public function home(){
        $berita = DB::table('berita')->orderBy('id', 'desc')->take(3)->get();
        $jumlahJiwa = DB::table('namadesa')->sum('jph_jiwa');
        $jumlahKK = DB::table('namadesa')->sum('jph_kk');
        $dana = DB::table('tabel_keuangan')->sum('jumlah_uang');
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('welcome', compact('home', 'ds','jumlahJiwa', 'jumlahKK','dana', 'berita')); 
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

          if ($request->hasFile('image')) {
            $foto_h = $request->file('image');
            $foto_extensi_h = $foto_h->extension();
            $foto_home = date('ymdhis') . ".$foto_extensi_h";
            $foto_h->move(public_path('Image'), $foto_home);
        } else {
            return redirect()->back()->with('error', 'Foto Halaman Utama wajib diisi');
        }

        // $name_home = $request->image->getClientOriginalName();
        // $img = $request->file('image')->storeAs('images', $name_home);
        //$path = $request->image->storeAs('images', $name_home);

        DB::table('home')->insert([
            'image' => $foto_home
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
        $home = DB::table('home')->where('id', $id)->first();
        if ($home) {
            $foto_home = $home->image;
            if (File::exists(public_path("Image/$foto_home"))) {
                File::delete(public_path("Image/$foto_home"));
            }
            DB::table('home')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');
    }
}
