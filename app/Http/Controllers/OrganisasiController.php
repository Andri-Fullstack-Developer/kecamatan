<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
      
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
            'image.required' => 'File gambar harus diisi',
            'image.mimes' => 'Format file gambar harus png, jpg, atau jpeg'
        ]);

        $name_home = $request->image->getClientOriginalName();
        $img = $request->file('image')->storeAs('images', $name_home);

        DB::table('organisasi')->insert([
            'image' => $name_home,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_organisasi(string $id, Request $request)
    {
        $foto = $request->input('img');
        Storage::disk('public')->delete($foto);
        
        DB::table('organisasi')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
