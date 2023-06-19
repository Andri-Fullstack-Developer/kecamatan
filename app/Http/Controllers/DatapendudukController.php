<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatapendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      

        $jumlahJiwa = DB::table('namadesa')->sum('jph_jiwa');
        $jumlahKK = DB::table('namadesa')->sum('jph_kk');

        $nads = DB::table('namadesa')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();

        return view('pages.Informasi.datapenduduk',  compact( 'home', 'ds', 'nads', 'jumlahJiwa', 'jumlahKK'));
    }

    public function datapenduduk_berita(string $id)
    {
        $berike = DB::table('berita')->orderBy('id', 'desc')->take(3)->get();
        $berita = DB::table('berita')->orderBy('id', 'desc')->get();

        return view('pages.Informasi.datapenduduk',  compact( 'berike','berita','home', 'ds', 'nads', 'jumlahJiwa', 'jumlahKK'));
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
        //
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
