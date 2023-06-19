<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ja = DB::table('jabatan')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Profil.penjabat', compact('home', 'ds', 'ja'));
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
            $foto_j = $request->file('image');
            $foto_extensi_j = $foto_j->extension();
            $foto_jabatan = date('ymdhis') . ".$foto_extensi_j";
            $foto_j->move(public_path('Image'), $foto_jabatan);
        } else {
            return redirect()->back()->with('error', 'Foto Halaman Utama wajib diisi');
        }

        DB::table('jabatan')->insert([
            'image' => $foto_jabatan,
            'nama' => $request->nama,
            'jabatan' => $request->penjabat
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
        $jabatan = DB::table('jabatan')->find($id);
    
        if ($jabatan) {
            DB::table('jabatan')->where('id', $id)->update([
                'nama' =>$request->nama,
                'jabatan' =>$request->jabatan
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_jabatan(string $id, Request $request)
    {
        $jabatan = DB::table('jabatan')->where('id', $id)->first();
        if ($jabatan) {
            $foto_j = $jabatan->image;
            if (File::exists(public_path("Image/$foto_j"))) {
                File::delete(public_path("Image/$foto_j"));
            }
            DB::table('jabatan')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');
    }
}
