<?php

namespace App\Http\Controllers;

use App\barang;
use App\stock;
use File;
use Session;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $a = barang::all();
        return view('barang.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama' => 'required|',
            'jumlah' => 'required|',
            'kondisi' => 'required|'
            
            
        ]);
        $a = new barang;
        $a->nama = $request->nama;
        $a->jumlah = $request->jumlah;
        $a->kondisi = $request->kondisi;

        //upload foto
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/foto/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $a->foto = $filename;
            }
        $a->save();
        ;
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = barang::findOrFail($id);
        return view('barang.edit',compact('a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'jumlah' => 'required|',
            'kondisi' => 'required|'
        ]);
        $a = barang::findOrFail($id);
        $a->nama = $request->nama;
        $a->jumlah = $request->jumlah;
        $a->kondisi = $request->kondisi;
        // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/foto/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($a->foto) {
        $old_foto = $a->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/foto'
        . DIRECTORY_SEPARATOR . $a->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $a->foto = $filename;
}
        $a->save();
        
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = barang::findOrFail($id);
        $a->delete();
        if ($a->foto) {
            $old_foto = $a->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/foto/'
            . DIRECTORY_SEPARATOR . $a->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $a->delete();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Barang berhasil dihapus"
        ]);
        return redirect()->route('barang.index');
    }
}
