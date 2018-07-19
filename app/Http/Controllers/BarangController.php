<?php

namespace App\Http\Controllers;

use App\barang;
use App\stock;
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

    public function borrow($id)
    {
        try {
            $barang = barang::findOrFail($id);
            Auth::user()->borrow($barang);
            Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil meminjam $barang->title"
            ]);
        }   catch (barangException $e) {
            Session::flash("flash_notification", [
            "level" => "danger",
            "message" => $e->getMessage()
            ]);
            } 
            catch (ModelNotFoundException $e) {
            Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Barang tidak ditemukan."
            ]);
        }
        return redirect('/');
    }

    public function returnBack($barang_id)
    {
        $borrowLog = BorrowLog::where('user_id', Auth::user()->id)
                                ->where('barang_id', $barang_id)
                                ->where('is_returned', 0)
                                ->first();
        if ($borrowLog) {
            $borrowLog->is_returned = true;
            $borrowLog->save();
            Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil mengembalikan " . $borrowLog->barang->title
            ]);
        }
        return redirect('/home');
    }

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
            'jumlah' => 'required|'
        ]);
        $a = new barang;
        $a->nama = $request->nama;
        $a->jumlah = $request->jumlah;
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
            'jumlah' => 'required|'
        ]);
        $a = barang::findOrFail($id);
        $a->nama = $request->nama;
        $a->jumlah = $request->jumlah;
        $a->save();
        ;
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
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Barang berhasil dihapus"
        ]);
        return redirect()->route('barang.index');
    }
}
