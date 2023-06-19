<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foto = DB::table('foto')->orderBy('id', 'desc')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Galery.foto', compact('home', 'ds', 'foto'));
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
            $foto_g = $request->file('image');
            $foto_extensi_g = $foto_g->extension();
            $foto_galery = date('ymdhis') . ".$foto_extensi_g";
            $foto_g->move(public_path('Image'), $foto_galery);
        } else {
            return redirect()->back()->with('error', 'Foto Halaman Utama wajib diisi');
        }


        DB::table('foto')->insert([
            'image' => $foto_galery,
            'judul' =>$request->judul
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
    public function destroy_foto(string $id, Request $request)
    {
        $foto = DB::table('foto')->where('id', $id)->first();
        if ($foto) {
            $foto_foto = $foto->image;
            if (File::exists(public_path("Image/$foto_foto"))) {
                File::delete(public_path("Image/$foto_foto"));
            }
            DB::table('foto')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');
        
        // $foto = $request->input('img');
        // Storage::disk('public')->delete($foto);
        
        // DB::table('foto')->where('id', $id)->delete();
        
        // return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
