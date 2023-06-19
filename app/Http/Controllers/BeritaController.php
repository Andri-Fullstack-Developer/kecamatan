<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function berita()
    {
        $berita = DB::table('berita')->orderBy('id', 'desc')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Berita.berita', compact('home', 'ds','berita'));
    }

    public function databerita($id)
    {
        $berike = DB::table('berita')->orderBy('id', 'desc')->take(3)->get();
        $berita = DB::table('berita')->where('id', $id)->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Berita.data.berita', compact('home', 'ds','berita','berike'));
    }

    public function index()
    {
        // $be = DB::table('berita')->get();
        // return view('dasboard.dasboard', compact('be'));
        //return view('/', compact('be'));
    }
    public function berita_index(){
        
        $home = DB::table('berita')->get();
        return view('welcome', compact('berita'));
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
            $foto_b = $request->file('image');
            $foto_extensi_b = $foto_b->extension();
            $foto_berita = date('ymdhis') . ".$foto_extensi_b";
            $foto_b->move(public_path('Image'), $foto_berita);
        } else {
            return redirect()->back()->with('error', 'Foto Halaman Utama wajib diisi');
        }

        DB::table('berita')->insert([
            'judul' =>$request->judul,
            'image' => $foto_berita,
            'informasi' =>$request->informasi,
        ]);

        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Beita.');
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
        $berita = DB::table('berita')->find($id);
    
        if ($berita) {
            DB::table('berita')->where('id', $id)->update([
                'judul' => $request->judul,
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_berita(string $id, Request $request)
    {
        
        // $foto = $request->input('img');
        // Storage::disk('public')->delete($foto);
        
        // DB::table('berita')->where('id', $id)->delete();
        
        // return back()->with('success', 'Terimakasih, Data telah terhapus.');
        $berita = DB::table('berita')->where('id', $id)->first();
        if ($berita) {
            $foto_berita= $berita->image;
            if (File::exists(public_path("Image/$foto_berita"))) {
                File::delete(public_path("Image/$foto_berita"));
            }
            DB::table('berita')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');
    }
}
