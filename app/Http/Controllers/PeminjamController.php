<?php

namespace App\Http\Controllers;

use App\peminjam;
use App\barang;
use App\User;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = peminjam::with('User')->get();
        return view('peminjam.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $barang = barang::all();
        return view('peminjam.create',compact('user','barang'));
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
            'user_id' => 'required',
            'barang_id' => 'required',
            'jumlah_pinjam' => 'required|'
        ]);
        $a = new peminjam;
        $a->user_id = $request->user_id;
        $a->barang_id = $request->barang_id;
        $a->jumlah_pinjam = $request->jumlah_pinjam;
        $a->save();
        
        
        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = peminjam::findOrFail($id);
        $user = User::all();
        $barang = barang::all();
        $selecteduser = peminjam::findOrFail($id)->user_id;
        $selectedbarang = peminjam::findOrFail($id)->barang_id;
        return view('peminjam.edit',compact('user','peminjam','barang','selecteduser','selectedbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'user_id' => 'required',
            'barang_id' => 'required',
            'jumlah_pinjam' => 'required|'
        ]);
        $a = peminjam::findOrFail($id);
        $a->user_id = $request->user_id;
        $a->barang_id = $request->barang_id;
        $a->jumlah_pinjam = $request->jumlah_pinjam;
        $a->save();
        
        return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = peminjam::findOrFail($id);
        $a->delete();
        
        return redirect()->route('peminjam.index');
    }
}
