<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NamedesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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
        DB::table('namadesa')->insert([
            'namaDs' => $request->namaDs,
            'jph_jiwa' =>$request->jph_jiwa,
            'jph_kk' =>$request->jph_kk
        ]);
        
        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Name Dasa.');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $desa = DB::table('namadesa')->find($id);
    
        if ($desa) {
            DB::table('namadesa')->where('id', $id)->update([
                'namaDs' => $request->namaDs,
                'jph_jiwa' =>$request->jph_jiwa,
                'jph_kk' =>$request->jph_kk
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_desa(string $id)
    {   
        DB::table('namadesa')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
