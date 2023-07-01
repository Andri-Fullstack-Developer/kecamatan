<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\PDF;

use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\Factory;

class EktpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ds = DB::table('namadesa')->get();
        return view('pages.pelayanan.ektp', \compact('ds'));
    }

    // public function form_ktp(){
    //     $ds = DB::table('namadesa')->get();
    //     $ektp = DB::table('pendaftaran_ektp')->get();
    //     return view('pages.pelayanan.form_ektp', \compact('ds', 'ektp'));
    // }

    public function download_data()
    {
        $ektp = DB::table('pendaftaran_ektp')->orderBy('id', 'desc')->get();
       
        $ds = DB::table('namadesa')->get();

        return view('pages.pelayanan.data_ektp', compact( 'ektp', 'ds'));
    }


    public function downloaddata_ektp(Repository $config, Filesystem $files, Factory $viewFactory, $id)
    {
        $ektp = DB::table('pendaftaran_ektp')->where('id', $id)->get();
        
        if($ektp->isNotEmpty()){
            // Inisialisasi objek Dompdf
            $dompdf = new Dompdf();

            // Konfigurasi Dompdf
            $options = new Options();
            // Set izin untuk membaca file gambar dari direktori 'Image'
            $options->set('isRemoteEnabled', true);
            $dompdf->setOptions($options);

            // Render view ke dalam HTML
            $view = $viewFactory->make('pages.Pelayanan.form_ektp', compact('ektp'))->render();

            // Load HTML ke dalam Dompdf
            $dompdf->loadHtml($view);

            // Render HTML ke dalam PDF
            $dompdf->render();

            // Mengambil output PDF dalam bentuk string
            $output = $dompdf->output();

            // Generate file name based on the DB value
            $fileName = 'data_ektp_' . $ektp[0]->nama . '.pdf'; // Assuming 'nama' is the column name in the database

            // Menyimpan file PDF ke direktori tempat yang diinginkan
            $pdfPath = 'Image/' . $fileName;
            $files->put($pdfPath, $output);

            // Mengirimkan file PDF sebagai respons download
            return response()->download($pdfPath, $fileName);
        }else {
            // Handle jika data ektp kosong
            // Misalnya, tampilkan pesan error atau arahkan pengguna ke halaman lain
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
        try {
            DB::table('pendaftaran_ektp')->insert([
                'provinsi'=>$request->provinsi,
                'kabupaten'=>$request->kebupatan,
                'kecamatan'=>$request->kecamatan,
                'kelurahan'=>$request->kelurahan,	
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tmpt_lahir,
                'tanggal_lahir'=>$request->tgl_lahir,
                'nik'=>$request->nik,
                'alamat'=>$request->alamat,
                'pekerjaan'=>$request->pekerjaan,
                'rt'=>$request->rt,
                'rw'=>$request->rw,
                'status_ktp'=>$request->status_ktp,
                'kode_pos' => $request->kode_post,
                'no_hp'=>$request->no_hp,
                'email'=>$request->email,
                'jenis_kelamin'=>$request->jk,
                'status_perkawinan'=>$request->status_perkawinan
            ]);
        
            return redirect()->back()
                ->with('success', 'Anda harus datang ke kecamatan dalam 3 hari setelah pendaftran untuk melengkapi pendaftaran yaitu
                Foto, cap jari dan tandatangan.');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }

        // return redirect()->back();
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
    public function destroy_ektp(string $id)
    {
          // Menghapus data dari tabel pengaduan
        DB::table('pendaftaran_ektp')->where('id', $id)->delete();
        
        return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
