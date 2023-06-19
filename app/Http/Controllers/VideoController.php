<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ds = DB::table('namadesa')->get();
        $video = Db::table('video')->orderBy('id', 'desc')->Paginate(6);
        return view('pages.Galery.videos', compact( 'ds','video'));
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
        //dd($request->all());
        $request->validate([
            'video' => 'required|mimetypes:video/mp4|max:20480' // Maksimum 20 MB (20 * 1024 KB)
        ]);

        // dd($request->video);
        if ($request->hasFile('video')) {
            $video_v = $request->file('video');
            $video_extensi_v = $video_v->extension();
            $video_video = date('ymdhis') . ".$video_extensi_v";
            $video_v->move(public_path('videos'), $video_video);
        } else {
            return redirect()->back()->with('error', 'Foto Halaman Utama wajib diisi');
        }

       DB::table('video')->insert([
        'video' =>$video_video,
        'judul' =>$request->judul
       ]);


       return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah video.');
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
    public function destroy_video(string $id, Request $request)
    {
        $video = DB::table('video')->where('id', $id)->first();
        if ($video) {
            $video_v = $video->video;
            if (File::exists(public_path("videos/$video_v"))) {
                File::delete(public_path("videos/$video_v"));
            }
            DB::table('video')->where('id', $id)->delete();
            return back()->with('success', 'Terimakasih, Data telah terhapus.');
        }
        return back()->with('error', 'Data tidak ditemukan');

        // $videos = $request->input('video');
        // Storage::disk('public')->delete($videos);
        
        // DB::table('video')->where('id', $id)->delete();
        
        // return back()->with('success', 'Terimakasih, Data telah terhapus.');
    }
}
