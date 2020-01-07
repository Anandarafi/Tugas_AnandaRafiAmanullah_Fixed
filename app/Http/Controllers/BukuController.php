<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\BukuModel;


class BukuController extends Controller
{
    public function index()
    {
        $data['datas']=BukuModel::join('kategori','kategori.kategori_buku','buku.kategori_buku')->join('penerbit','penerbit.kode_penerbit','buku.kode_penerbit')->join('pengarang','pengarang.kode_pengarang','buku.kode_pengarang')->paginate(10); 
        return view("katalog.buku",$data);
    }
    
    public function create()
    {
        return view('katalog.create_buku');
    }
    public function store(Request $request)
    {
        BukuModel::create([
            'nama_buku'         => $request->nama_buku,
            'eks'            => $request->eks,
            'kode_pengarang'    => $request->kode_pengarang,
            'kode_penerbit'     => $request->kode_penerbit,
            'tahun'             => $request->tahun,
            'foto'              => $request->foto,
            'kategori_buku'     => $request->kategori_buku,
        ]);
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->action('BukuController@index')->with('alert_message', 'Berhasil Menambah Data Buku ');
    }
    public function edit($id)
    {
        $data = BukuModel::where('kode_buku', $id)->join('kategori','kategori.kategori_buku','buku.kategori_buku')->join('penerbit','penerbit.kode_penerbit','buku.kode_penerbit')->join('pengarang','pengarang.kode_pengarang','buku.kode_pengarang')->get();
        return view('katalog.edit_buku', compact('data'));
    }
    public function detail($id)
    {
        $data = BukuModel::where('kode_buku', $id)->join('kategori','kategori.kategori_buku','buku.kategori_buku')->join('penerbit','penerbit.kode_penerbit','buku.kode_penerbit')->join('pengarang','pengarang.kode_pengarang','buku.kode_pengarang')->get();
        return view('katalog.detail_buku', compact('data'));
    }

    public function update(Request $request)
    {

        BukuModel::where('kode_buku', $request->id)->update([
            'nama_buku'         => $request->nama_buku,
            'jumlah'            => $request->jumlah,
            'foto'              => $request->foto,
        ]);
        return redirect()->action('BukuController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        BukuModel::where('kode_buku', $id)->delete();

        return redirect()->action('BukuController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }
    
}

