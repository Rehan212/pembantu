<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembantu;
use Session;
use File;
use Illuminate\Support\Str;
class PembantuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembantu = pembantu::all();
    //     Session::flash("flash_notification",[
    //        "level" => "success",
    //        "message" => "berhasil menampilkan"
    //    ]);
       return view('backend.pembantu.index',compact('pembantu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pembantu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembantu = new pembantu();
        $pembantu->pembantu_kode = $request->pembantu_kode;
        $pembantu->n_pembantu = $request->n_pembantu;
        $pembantu->alamat_pembantu = $request->alamat_pembantu;
        $pembantu->umur = $request->umur;
        $pembantu->jk_pembantu = $request->jk_pembantu;
        $pembantu->pendidikan = $request->pendidikan;
        $pembantu->agama = $request->agama;
        $pembantu->status = $request->status;
        $pembantu->pengalaman_kerja = $request->pengalaman_kerja;

        if ($request->hasFile('photo_art')) {
            $file = $request->file('photo_art');
            $path = public_path() . '/assets/img/';
            $filename = $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $pembantu->photo_art = $filename;
        }
        $pembantu->save();
         Session::flash("flash_notification",[
            // "level" => "success",
            // "message" => "berhasil mengedit <b>"
            //             .$kategori->kategori_nama."</b>"
        ]);
            //6.tampilkan berhasil
            return redirect()->route('pembantu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembantu = pembantu::findOrFail($id);
        return view('backend.pembantu.show', compact('pembantu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembantu = pembantu::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                        .$pembantu->nama_pembantu."</b>"
        ]);
        return view('backend.pembantu.edit',compact('pembantu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembantu = pembantu::findOrFail($id);
        $pembantu->pembantu_kode = $request->pembantu_kode;
        $pembantu->n_pembantu = $request->n_pembantu;
        $pembantu->alamat_pembantu = $request->alamat_pembantu;
        $pembantu->umur = $request->umur;
        $pembantu->jk_pembantu = $request->jk_pembantu;
        $pembantu->pendidikan = $request->pendidikan;
        $pembantu->agama = $request->agama;
        $pembantu->status = $request->status;
        $pembantu->pengalaman_kerja = $request->pengalaman_kerja;

        if($request->hasFile('photo_art')){
            $file = $request->file('photo_art');
            $path = public_path().'/assets/img/';
            $filename = Str::random(6). '_' .$file->getClientOriginalName();
            $uploadSuccess = $file->move($path, $filename);
            //hapus photo_art lama
            if($pembantu->photo_art){
                $old_foto = $pembantu->photo_art;
                $filepath = public_path() .'/assets/img/'. $pembantu->photo_art;

                    try{
                    File::delete($filepath);
                    }
                    catch(FileNotFoundException $e){
                    //File sudah dihapus atau tidak ada
                    }
            }
            $pembantu->photo_art = $filename;
        }

        $pembantu->save();
        return redirect()->route('pembantu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembantu = pembantu::findOrFail($id)->delete();
        return redirect()->route('pembantu.index');
    }
}
