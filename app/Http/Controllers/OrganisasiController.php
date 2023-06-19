<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camat = DB::table('camat')->first();
        $orga = DB::table('sekretaris_camat')->first();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        $data = [
            $camat->Nama_Camat,
            $orga->Nama_Sekretaris,
        ];
        return view('pages.Profil.organisasi', \compact('home', 'ds','data'));
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
    public function camat(Request $request){
        DB::table('camat')->insert([
            'Nama_Camat	' =>$request->camat
        ]);
    }

    public function sekertaris(Request $request){
        $camat = DB::table('camat')->where('Nama_Camat', $request->id_camat)->first();
        DB::table('sekretaris_camat')->insert([
            'Nama_Sekretaris' =>$request->sekertaris,
            'ID_Camat'=>$camat->id
        ]);
    }

    // public function store(Request $request)
    // {
     
    //     // dd($request);
    //     $foto = $request->file('image');
    //     $foto_extensi =  $foto->extension();
    //     $foto_nama = date('ymdhis').".$foto_extensi";
    //     $foto->move(public_path('Image'), $foto_nama);

    //     DB::table('organisasi')->insert([
    //         'image' => $foto_nama,
    //         'nama' => $request->nama,
    //         'jabatan' => $request->jabatan,
    //         'alamat' => $request->alamat,
    //     ]);

    //     return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Beita.');
    // }

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
        $organisasi = DB::table('organisasi')->find($id);
    
        if ($organisasi) {
            DB::table('organisasi')->where('id', $id)->update([
                'nama' => $request->nama,
                'jabatan' =>$request->jabatan,
                'alamat' =>$request->alamat
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_organisasi(string $id)
    {
        $orga = DB::table('organisasi')->where('id', $id)->first();
        if ($orga) {
            $orga_foto = $orga->image;
            if (File::exists(public_path("image/$orga_foto"))) {
                File::delete(public_path("image/$orga_foto"));
            }
            DB::table('organisasi')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');
    }
}
