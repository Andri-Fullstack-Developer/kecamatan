<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PenganduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pengadu =DB::table('pengaduan')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();
        return view('pages.Media.pengaduan', compact('home', 'ds', 'pengadu'));
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
        $validator = Validator::make($request->all(), [
            'img_ktp' => 'required|mimes:png,jpg,jpeg',
            'img_selvi' => 'required|mimes:png,jpg,jpeg',
            'img_pengadu' => 'required|mimes:png,jpg,jpeg',
            'nama_pelapor' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'diskripsi' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Mohon lengkapi semua field yang wajib diisi.');
        }
    
        // // Foto KTP
        if ($request->hasFile('img_ktp')) {
            $foto_k = $request->file('img_ktp');
            $foto_extensi_k = $foto_k->extension();
            $foto_ktp = date('ymdhis'.'_k') . ".$foto_extensi_k";
            $foto_k->move(public_path('Image'), $foto_ktp);
        } else {
            // Tindakan yang diambil ketika file img_ktp tidak ada
            return redirect()->back()->with('error', 'Foto KTP wajib diisi');
        }
    
        // Foto Selvi KTP
        if ($request->hasFile('img_selvi')) {
            $foto_s = $request->file('img_selvi');
            $foto_extensi_s = $foto_s->extension();
            $foto_selvi = date('ymdhis'. '_s') . ".$foto_extensi_s";
            $foto_s->move(public_path('Image'), $foto_selvi);
        } else {
            // Tindakan yang diambil ketika file img_selvi tidak ada
            return redirect()->back()->with('error', 'Foto Selvi KTP wajib diisi');
        }

        // Foto pengadu
        if ($request->hasFile('img_pengadu')) {
            $foto_p = $request->file('img_pengadu');
            $foto_extensi_p = $foto_p->extension();
            $foto_pengadu = date('ymdhis'. '_p') . ".$foto_extensi_p";
            $foto_p->move(public_path('Image'), $foto_pengadu);
        } else {
            // Tindakan yang diambil ketika file img_pengadu tidak ada
            return redirect()->back()->with('error', 'Foto Pengadu wajib diisi');
        }

        // dd($request);
    
        DB::table('pengaduan')->insert([
            'namape' => $request->nama_pelapor,
            'jk' => $request->jenis_kelamin,
            'usia' => $request->usia,
            'no_hp' => $request->phone,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'foto_ktp' => $foto_ktp,
            'foto_selfi' => $foto_selvi,
            'foto_pengadu' => $foto_pengadu,
            'text_laporan' => $request->diskripsi
        ]);
        
        return redirect()->back()->with('success', 'Terimakasih, Anda sudah melaporkan kepada kami.');
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
    public function destroy_pengaduan(string $id)
    {
        $pengadu = DB::table('pengaduan')->where('id', $id)->first();
        if ($pengadu) {
            $foto_ktp = $pengadu->foto_ktp;
            $foto_selfi = $pengadu->foto_selfi;
            $foto_pengadu = $pengadu->foto_pengadu;
        
            // Menghapus foto ktp
            if (File::exists(public_path("Image/$foto_ktp"))) {
                File::delete(public_path("Image/$foto_ktp"));
            }
        
            // Menghapus foto selfi
            if (File::exists(public_path("Image/$foto_selfi"))) {
                File::delete(public_path("Image/$foto_selfi"));
            }
        
            // Menghapus foto pengadu
            if (File::exists(public_path("Image/$foto_pengadu"))) {
                File::delete(public_path("Image/$foto_pengadu"));
            }
        
            // Menghapus data dari tabel pengaduan
            DB::table('pengaduan')->where('id', $id)->delete();
        
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        
        return back()->with('error', 'Data tidak ditemukan');
    }
}
