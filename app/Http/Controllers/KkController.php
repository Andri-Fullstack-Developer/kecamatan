<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ds = DB::table('namadesa')->get();
        return view('pages.pelayanan.kk', \compact('ds'));
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
        try{
            DB::table('pendaftaran_kk')->insert([
                'kabupaten_kk'=>$request->kabupaten_kk,
                'kecamatan_kk'=>$request->kecamatan_kk,
                'kelurahan_kk'=>$request->kelurahan_kk,
                'nama_pe_kk'=>$request->a,
                'nik_pe_kk'=>$request->b,
                'nomerKkSemula_pe_kk'=>$request->c,
                'alamat_pe_kk'=>$request->d,
                'pekerjaan_pe_kk'=>$request->e,
                'pemohon_pe_kk'=>$request->f,
                'rt_pe_kk'=>$request->g,
                'rw_pe_kk'=>$request->k,
                'kodePost_pe_kk	'=>$request->l,
                'noHp_pe_kk	'=>$request->m,
                'email_pe_kk'=>$request->n,
                'jmlhPemohon_pe_kk'=>$request->o,
                'noQ_pe_kk'=>$request->p,
                'namaQ_pe_kk'=>$request->q,
                'shdkQ_pe_kk'=>$request->r,
                'noW_pe_kk'=>$request->s,
                'nikW_pe_kk'=>$request->t,
                'namaW_pe_kk'=>$request->u,
                'shdkW_pe_kk'=>$request->v,
                'noE_pe_kk'=>$request->w,
                'namaE_pe_kk'=>$request->x,
                'shdkE_pe_kk'=>$request->y,
                'noR_pe_kk'=>$request->z,
                'nikR_pe_kk'=>$request->aa,
                'namaR_pe_kk'=>$request->bb,
                'shdkR_pe_kk'=>$request->cc,
                'noT_pe_kk'=>$request->dd,
                'nikT_pe_kk'=>$request->ee,
                'namaT_pe_kk'=>$request->ff,
                'provinsi_kk'=>$request->gg,
                'shdkT_pe_kk'=>$request->hh,
                'noY_pe_kk'=>$request->ii,
                'nikY_pe_kk'=>$request->jj,
                'namaY_pe_kk'=>$request->kk,
                'shdkY_pe_kk'=>$request->ll,
                'noU_pe_kk'	=>$request->mm,
                'nikU_pe_kk'=>$request->nn,
                'namaU_pe_kk'=>$request->oo,
                'shdkU_pe_kk'=>$request->pp,
                'noI_pe_kk'=>$request->qq,
                'nikI_pe_kk'=>$request->rr,
                'namaI_pe_kk'=>$request->ss,
                'shdkI_pe_kk'=>$request->tt,
                'noO_pe_kk'=>$request->uu,
                'nikO_pe_kk'=>$request->vv,
                'namaO_pe_kk'=>$request->ww,
                'shdkO_pe_kk'=>$request->xx,
                'noP_pe_kk'=>$request->yy,
                'nikP_pe_kk'=>$request->zz,
                'namaP_pe_kk'=>$request->aaa,
                'shdkP_pe_kk'=>$request->bbb,
                'nikQ_pe_kk'=>$request->cc
            ]);
        return redirect()->back()->with('success', 'Anda harus datang ke kecamatan dalam 3 hari setelah pendaftran untuk melengkapi pendaftaran yaitu
        Foto, cap jari dan tandatangan.');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Error during the creation!');
        }
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
