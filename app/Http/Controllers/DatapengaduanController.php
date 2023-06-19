<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\PDF;
 //use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\Factory;

class DatapengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Repository $config, Filesystem $files, Factory $viewFactory)
    {
        $pengadu =DB::table('pengaduan')->get();
        return view('pages.Layanan.datapengaduan', \compact('pengadu'));
        
    }


    public function datafile(){
        $pengadu =DB::table('pengaduan')->orderBy('id', 'desc')->get();
        $home = DB::table('home')->select('image')->get();
        $ds = DB::table('namadesa')->get();

        return view('pages.Informasi.datapengaduan',  compact('pengadu', 'home', 'ds'));
    }

    // public function downloaddata(Repository $config, Filesystem $files, Factory $viewFactory, $id)
    // {
    //     $pengadu =DB::table('pengaduan')->where('id', $id)->get();

    //     $dompdf = new Dompdf();
    //     $view = view('pages.Layanan.datapengaduan', compact('pengadu'));
    //     $pdf = new PDF($dompdf, $config, $files, $viewFactory);
    //     return $pdf->loadHTML($view)->stream('data_pengaduan.pdf');
    // }

    public function downloaddata(Repository $config, Filesystem $files, Factory $viewFactory, $id)
    {
        $pengadu = DB::table('pengaduan')->where('id', $id)->get();

        // Inisialisasi objek Dompdf
        $dompdf = new Dompdf();

        // Konfigurasi Dompdf
        $options = new Options();
        // Set izin untuk membaca file gambar dari direktori 'Image'
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);

        // Render view ke dalam HTML
        $view = $viewFactory->make('pages.Layanan.datapengaduan', compact('pengadu'))->render();

        // Load HTML ke dalam Dompdf
        $dompdf->loadHtml($view);

        // Render HTML ke dalam PDF
        $dompdf->render();

        // Mengambil output PDF dalam bentuk string
        $output = $dompdf->output();

        // Menyimpan file PDF ke direktori tempat yang diinginkan
        $pdfPath = 'Image.data_pengaduan.pdf';
        $files->put($pdfPath, $output);

        // Mengirimkan file PDF sebagai respons download
        return response()->download($pdfPath, 'data_pengaduan.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // v
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
