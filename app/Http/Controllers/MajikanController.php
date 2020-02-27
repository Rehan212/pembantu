<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\majikan;
use Session;
class MajikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majikan = majikan::all();
    //     Session::flash("flash_notification",[
    //        "level" => "success",
    //        "message" => "berhasil menampilkan"
    //    ]);
       return view('backend.majikan.index',compact('majikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.majikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $majikan = new majikan();
        $majikan->majikan_kode = $request->majikan_kode;
        $majikan->nama_majikan = $request->nama_majikan;
        $majikan->jenis_kelamin = $request->jenis_kelamin;
        $majikan->alamat_majikan = $request->alamat_majikan;
        $majikan->no_ktp = $request->no_ktp;
        $majikan->save();
         Session::flash("flash_notification",[
            // "level" => "success",
            // "message" => "berhasil mengedit <b>"
            //             .$majikan->majikan_nama."</b>"
        ]);
            //6.tampilkan berhasil
            return redirect()->route('majikan.index');

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
        $majikan = majikan::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                        .$majikan->nama_majikan."</b>"
        ]);
        return view('backend.majikan.edit',compact('majikan'));
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
        $majikan = majikan::findOrFail($id);
        $majikan->majikan_kode = $request->majikan_kode;
        $majikan->nama_majikan = $request->nama_majikan;
        $majikan->jenis_kelamin = $request->jenis_kelamin;
        $majikan->alamat_majikan = $request->alamat_majikan;
        $majikan->no_ktp = $request->no_ktp;
        $majikan->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                        .$majikan->majikan_nama."</b>"
        ]);
           return redirect()->route('majikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $majikan = majikan::findOrFail($id)->delete();
        return redirect()->route('majikan.index');
    }
}
