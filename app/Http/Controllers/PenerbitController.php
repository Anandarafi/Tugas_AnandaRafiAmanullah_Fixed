<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\PenerbitModel;


class PenerbitController extends Controller
{
    public function index()
    {
        $data['datas']=PenerbitModel::all(); 
        return view("penerbit.penerbit",$data);
    }
    public function create()
    {
        return view('penerbit.create_penerbit');
    }
    public function store(Request  $request)
    {
        PenerbitModel::create([
            'nama_penerbit'     => $request->nama_penerbit,
        ]);        
        return redirect()->action('PenerbitController@index')->with('alert_message', 'Berhasil Menambah Data');
    }

    public function edit($id)
    {
        $data = PenerbitModel::where('kode_penerbit', $id)->get();
        return view('penerbit.edit_penerbit', compact('data'));
    }
    public function detail($id)
    {
        $data = PenerbitModel::where('kode_penerbit', $id)->get();
        return view('penerbit.detail_penerbit', compact('data'));
    }

    public function update(Request $request)
    {

        PenerbitModel::where('kode_penerbit', $request->id)->update([
            'nama_penerbit'      => $request->nama_penerbit,
        ]);
        return redirect()->action('PenerbitController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        PenerbitModel::where('kode_penerbit', $id)->delete();

        return redirect()->action('PenerbitController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

}
