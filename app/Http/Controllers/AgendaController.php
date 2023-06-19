<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        $agen = DB::table('agenda')->orderBy('id', 'desc')->get();
        return view('pages.Program.agenda', compact('home', 'ds', 'agen'));
        // return view('pages.Program.agenda');
    }

    /**
     * Show the form for creating a new resource. ->orderBy('created_at', 'desc')
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
        DB::table('agenda')->insert([
            'judul' => $request->judul,
            'hariTgl' => $request->hariTgl,
            'jam' => $request->jam,
            'lokasi' =>$request->lokasi
        ]);

       return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Aganda.');
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
        $agenda = DB::table('agenda')->find($id);
    
        if ($agenda) {
            DB::table('agenda')->where('id', $id)->update([
                'judul' => $request->judul,
                'hariTgl' => $request->hariTgl,
                'jam' => $request->jam,
                'lokasi' =>$request->lokasi
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_agenda(string $id)
    {
        DB::table('agenda')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
