<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemesanan;
use App\pembantu;
use App\majikan;
use App\kategori;
use Session;
class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = pemesanan::all();
        $majikan = majikan::all();
        $pembantu = pembantu::all();
        $kategori = kategori::all();
        Session::flash("flash_notification",[
           "level" => "success",
           "message" => "berhasil menampilkan"
       ]);
    // dd($pemesanan);
       return view('backend.pemesanan.index',compact('pemesanan', 'majikan', 'pembantu', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemesanan = pemesanan::all();
        $majikan = majikan::all();
        $pembantu = pembantu::all();
        $kategori = kategori::all();
        return view('backend.pemesanan.create',compact('pemesanan', 'majikan', 'pembantu', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemesanan = new pemesanan;
        $pemesanan->kategori_kode = $request->kategori_nama;
        $pemesanan->pembantu_kode = $request->pembantu_kode;
        $pemesanan->majikan_kode = $request->nama_majikan;
        $pemesanan->durasi_kontrak = $request->durasi_kontrak;
        $pemesanan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                . $pemesanan->pemesanan_judul . "</b>"
        ]);
        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
