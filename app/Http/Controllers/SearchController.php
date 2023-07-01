<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
        public function search(Request $request)
    {
        $query = $request->input('query');

        $results = [
            'Agenda' => DB::table('agenda')->where('judul', 'LIKE', '%' . $query . '%')->get(),
            'Berita' => DB::table('berita')->where('judul', 'LIKE', '%' . $query . '%')->get(),
            'Camat' => DB::table('camat')->where('Nama_Camat', 'LIKE', '%' . $query . '%')->get(),
            'Foto' => DB::table('foto')->where('judul', 'LIKE', '%' . $query . '%')->get(),
            'Jabatan' => DB::table('jabatan')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            'Namadesa' => DB::table('namadesa')->where('namaDs', 'LIKE', '%' . $query . '%')->get(),
            'Organisasi' => DB::table('organisasi')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            'Pengaduan' => DB::table('pengaduan')->where('namape', 'LIKE', '%' . $query . '%')->get(),
            'Program Skpd' => DB::table('programskpd')->where('nama_program', 'LIKE', '%' . $query . '%')->get(),
            'Video' => DB::table('video')->where('judul', 'LIKE', '%' . $query . '%')->get(),
        ];

        $request->session()->put('results', $results);

        return redirect()->route('showResults');
    }

    public function showResults(Request $request)
    {
        $results = $request->session()->get('results');
        if (!$results) {
            return back()->with('error', 'Maaf data yang anda cari tidak di temukan');
        }

    return view('search_results', compact('results'));
    }

}
// 'Visi Misi' => DB::table('visimisi')->where('judul', 'LIKE', '%' . $query . '%')->get(),
 // 'Ratings' => DB::table('ratings')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Sekretaris Camat' => DB::table('sekertaris_camat')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Seksi' => DB::table('saksi')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Signup' => DB::table('singup')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Tabel Keuangan' => DB::table('tabel_keuagan')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Pendaftaran Akte' => DB::table('pendatran_akte')->where('provinsi', 'LIKE', '%' . $query . '%')->get(),
            // 'Pendaftaran Ektp' => DB::table('pendaftran_aktp')->where('nama', 'LIKE', '%' . $query . '%')->get(),
            // 'Pendaftaran Kk' => DB::table('pendaftaran_kk')->where('nama', 'LIKE', '%' . $query . '%')->get(),
             // 'Kepala Seksi' => DB::table('kepala_saksi')->where('Nama_Kepala_Seksi', 'LIKE', '%' . $query . '%')->get(),