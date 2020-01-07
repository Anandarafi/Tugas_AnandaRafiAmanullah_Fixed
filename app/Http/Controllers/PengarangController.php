<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\PengarangModel;


class PengarangController extends Controller
{
    public function index()
    {
        $data['datas']=PengarangModel::all(); 
        return view("pengarang.pengarang",$data);
    }
    public function create()
    {
        return view('pengarang.create_pengarang');
    }
    public function store(Request  $request)
    {
        PengarangModel::create([
            'nama_pengarang'     => $request->nama_pengarang,
        ]);        
        return redirect()->action('PengarangController@index')->with('alert_message', 'Berhasil Menambah Data');
    }

    public function edit($id)
    {
        $data = PengarangModel::where('kode_pengarang', $id)->get();
        return view('pengarang.edit_pengarang', compact('data'));
    }
    public function detail($id)
    {
        $data = PengarangModel::where('kode_pengarang', $id)->get();
        return view('pengarang.detail_pengarang', compact('data'));
    }

    public function update(Request $request)
    {

        PengarangModel::where('kode_pengarang', $request->id)->update([
            'nama_pengarang'      => $request->nama_pengarang,
        ]);
        return redirect()->action('PengarangController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        PengarangModel::where('kode_pengarang', $id)->delete();

        return redirect()->action('PengarangController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

}
