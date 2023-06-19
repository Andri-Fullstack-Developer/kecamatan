<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = DB::table('programskpd')->orderBy('id', 'desc')->Paginate(5);
        //$pro = DB::table('programskpd')->orderBy('id', 'desc')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        $agen = DB::table('agenda')->orderBy('id', 'desc')->get();
        return view('pages.Program.Program', compact('home','program',  'ds', 'agen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //
        // CREATE TABLE programSKPD (
        //     id INT AUTO_INCREMENT PRIMARY KEY,
        //     nama_program VARCHAR(255),
        //     tahun INT,
        //     anggaran DECIMAL(10, 2),
        //     deskripsi TEXT
        //   );
          
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
        DB::table('programskpd')->insert([
            'nama_program' => $request->nama_program,
            'deskripsi' => $request->deskripsi,
            'anggaran' => $request->angaran,
            'tahun' => $request->tahun
        ]);
        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Data Program.');

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
        $program = DB::table('programskpd')->find($id);
    
        if ($program) {
            DB::table('programskpd')->where('id', $id)->update([
                'nama_program' => $request->nama_program,
                'deskripsi' => $request->deskripsi,
                'anggaran' => $request->anggaran,
            ]);
    
            return back()->with('success', 'Terimakasih, Anda sudah berhasil Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_program(string $id)
    {
        DB::table('programskpd')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
