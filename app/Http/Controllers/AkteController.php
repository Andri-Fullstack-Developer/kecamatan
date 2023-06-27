<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ds = DB::table('namadesa')->get();
        return view('pages.pelayanan.akte', \compact('ds'));
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
        // dd($request->all());
        try {
        DB::table('pendaftaran_akte')->insert([
            // nama Pelapor
            'nama_pe'=>$request->nama_pelapor,
            'nik_pe'=>$request->nik_pelapor,	
            'noKK_pe'=>$request->kk_pelapor,
            'kewarga_pe'=>$request->kewarga_pelapor,
            'noHp_pe'=>$request->noHp_pelapor,
            //Saksi I
            'nama_sak_I'=>$request->nama_sak_I,
            'nik_sak_I'=>$request->nik_sak_I,
            'kk_sak_I'=>$request->kk_sak_I,
            'kewarga_sak_I'=>$request->kewarga_sak_I,	
            // Saksi II
            'nama_sak_II'=>$request->nama_sak_II,
            'nik_sak_II'=>$request->nik_sak_II,
            'kk_sak_II'=>$request->kk_sak_II,
            'kewarga_sak_II'=>$request->kewarga_sak_II,
            // subjek
            'nama_sub'=>$request->nama_subjek,
            'nik_sub'=>$request->nik_subjek,	
            'kk_sub'=>$request->kk_subjek,
            'no_dok_sub'=>$request->no_doc_subjek,
            'kewarga_sub'=>$request->kewarga_subjek,
            //  oarang tua Ayah
            'nama_ayah'=>$request->nama_ayah,
            'nik_ayah'=>$request->nik_ayah,
            'kk_ayah'=>$request->kk_ayah,
            'temLahir_ayah'=>$request->tempatLahir_ayah,	
            'tglLahir_ayah'=>$request->tglLahir_ayah,
            'kewarga_ayah'=>$request->kewarga_ayah,
            // Orang Tua Ibuk
            'nama_ibu'=>$request->nama_ibuk,
            'nik_ibu'=>$request->nik_ibuk,
            'kk_ibu'=>$request->kk_ibuk,
            'temLahir_ibu'=>$request->tmptlahir_ibuk,
            'tglLahir_ibu'=>$request->tgllahir_ibuk,
            'kewarga_ibu'=>$request->kewarga_ibuk,
            // Anak
            'nama_anak'=>$request->nama_anak,
            'tmptLahir_anak'=>$request->tmptLahir_anak,
            'jenis_kelamin_anak'=>$request->jk_anak,
            'hari_anak'=>$request->hari_anak,
            'tgl_lahir_anak'=>$request->tgllahir_anak,
            'anakKe_anak'=>$request->anakKe_anak,
            'Penolong_ke'=>$request->penolong_anak,
            'beratBayi_anak'=>$request->berat_anak,
            'panjangBayi_anak'=>$request->panjang_anak,
        ]);

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }

        // return redirect()->back();
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
    public function destroy(string $id)
    {
        //
    }
}
