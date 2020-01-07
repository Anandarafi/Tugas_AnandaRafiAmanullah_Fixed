<?php

namespace App\Http\Controllers;

use App\KategoriModel;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas']=KategoriModel::all(); 
        return view("kategori.kategori",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriModel::create([
            'nama_kategori'     => $request->nama_kategori,
        ]);        
        return redirect()->action('KategoriController@index')->with('alert_message', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $data = KategoriModel::where('kategori_buku', $id)->get();
        return view('kategori.detail_kategori', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KategoriModel::where('kategori_buku', $id)->get();
        return view('kategori.edit_kategori', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        KategoriModel::where('kategori_buku', $request->id)->update([
            'nama_kategori'      => $request->nama_kategori,
        ]);
        return redirect()->action('KategoriController@index')->with('alert_message', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        KategoriModel::where('kategori_buku', $id)->delete();

        return redirect()->action('KategoriController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

}
