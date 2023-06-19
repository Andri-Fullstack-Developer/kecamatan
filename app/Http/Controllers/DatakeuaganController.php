<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatakeuaganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $dataKeuangan = null;
        if($request->bulan != 0){
            
            $selectedMonth = $request->bulan; 
            // $tahun = $request->tahun;
            $dataKeuangan = DB::table('tabel_keuangan')
            ->where('bulan', $selectedMonth)
            // ->where('tahun', $tahun)
            ->get();
            $dana = DB::table('tabel_keuangan')->sum('jumlah_uang');
            $ds = DB::table('namadesa')->get();
            
            return view('pages.Informasi.datakeuagan', compact('ds', 'dataKeuangan','dana' ,'selectedMonth'));  
        }else {
          
            $selectedMonth = $request->bulan;
            $dana = DB::table('tabel_keuangan')->sum('jumlah_uang');
            $ds = DB::table('namadesa')->get();
            
            return view('pages.Informasi.datakeuagan', compact('ds', 'dana','selectedMonth'));    
        }
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
        $tanggal = $request->tanggal;
        $bulan = date('n', strtotime($tanggal));
        $tahun = date('Y', strtotime($tanggal));
        $jumlahUang = $request->jumlahUang;
        
        DB::table('tabel_keuangan')->insert([
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'jumlah_uang' => $jumlahUang
        ]);

        return back()->with('success', 'Terimakasih, Anda sudah berhasil menambah data.');
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
