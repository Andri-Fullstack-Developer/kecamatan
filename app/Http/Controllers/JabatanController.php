<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JabatanController extends Controller
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
        //dd($request->all());
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
            'image.required' => 'File gambar harus diisi',
            'image.mimes' => 'Format file gambar harus png, jpg, atau jpeg'
        ]);

        $name_ja = $request->image->getClientOriginalName();
        $img = $request->file('image')->storeAs('images', $name_ja);

        DB::table('jabatan')->insert([
            'image' => $name_ja,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_jabatan(string $id, Request $request)
    {
        
        $foto = $request->input('img');
        Storage::disk('public')->delete($foto);
        
        DB::table('jabatan')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
