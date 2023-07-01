<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $berike = DB::table('berita')->orderBy('id', 'desc')->take(3)->get();
        
    //     $home = DB::table('home')->select('image')->get();
    //     $ds = DB::table('namadesa')->get();
    //     $agen = DB::table('agenda')->orderBy('id', 'desc')->get();
    //     return view('pages.Program.agenda', compact('home', 'ds', 'agen'));
    //     // return view('pages.Program.agenda');
    // }
    public function index(Request $request, $id = 0)
    {
        $ds = DB::table('namadesa')->get();
        $berike = DB::table('berita')->orderBy('id', 'desc')->take(3)->get();
        
        // Mendapatkan tahun dari permintaan GET atau menggunakan tahun saat ini
        // $tahun = $request->input('tahun', date('Y'));
        $tahun = $request->tahun;
        if(!$tahun){
            $tahun = date('Y');
        }
    
        // Kisaran tahun dari 2015 sampai 2023
        $years = range(2015, date('Y'));
    
        // Mengambil data agenda berdasarkan tahun yang dipilih
        $agen = DB::table('agenda')
            ->whereYear('hariTgl', $tahun)
            ->orderBy('id', 'desc')
            ->paginate(7);
    
        return view('pages.Program.agenda', compact('ds','berike', 'agen', 'tahun', 'years'));
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
            'hari'=>$request->hari,
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
                'hari'=>$request->hari,
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
