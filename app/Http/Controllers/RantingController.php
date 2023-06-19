<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RantingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ran = DB::table('ratings')->where('stars', 5)->count();
        $bin1 = DB::table('ratings')->where('stars', 1)->count();
        $bin2 = DB::table('ratings')->where('stars', 2)->count();
        $bin3 = DB::table('ratings')->where('stars', 3)->count();
        $bin4 = DB::table('ratings')->where('stars', 4)->count();
        $jum = DB::table('ratings')->count();
        
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Profil.ranting', compact('home', 'ds', 'ran','bin1', 'bin2', 'bin3', 'bin4', 'jum'));
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
       // dd($request->stars);
        DB::table('ratings')->insert([
            'stars'=>$request->stars
        ]);

        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Data rating.');
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
