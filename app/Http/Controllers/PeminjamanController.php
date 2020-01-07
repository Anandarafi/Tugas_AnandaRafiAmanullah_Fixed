<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeminjamanModel;
use App\SiswaModel;
use App\BukuModel;

class PeminjamanController extends Controller
{
       public function index()
    {   
         $data['datas']=PeminjamanModel::join('buku','buku.kode_buku','peminjaman.kode_buku')->join('siswa','siswa.nisn','peminjaman.nisn')->get(); 
        return view("peminjamanbuku.peminjaman",$data);
    }
    public function kembali()
    {   
         $data['datas']=PeminjamanModel::join('buku','buku.kode_buku','peminjaman.kode_buku')->join('siswa','siswa.nisn','peminjaman.nisn')->get(); 
        return view("peminjamanbuku.pengembalian",$data);
    }
     public function minjam()
     {
          $data['datas']=BukuModel::join('kategori','kategori.kategori_buku','buku.kategori_buku')->join('penerbit','penerbit.kode_penerbit','buku.kode_penerbit')->join('pengarang','pengarang.kode_pengarang','buku.kode_pengarang')->paginate(10); 
          return view("peminjamanbuku.indexbuku",$data);
     }
    public function create()
    {
        return view('peminjamanbuku.create_peminjaman');
    }
    public function store(Request $request)
    {
        PeminjamanModel::create([
            'nisn'         => $request->nisn,
            'tgl_pinjam'   => $request->tgl_pinjam,
            'tgl_kembali'  => $request->tgl_kembali,
            'kode_buku'    => $request->kode_buku,
            'jumlah'       => $request->jumlah,
        ]);
        
        return redirect()->action('PeminjamanController@minjam')->with('alert_message', 'Berhasil Meminjam Buku ');
    }
    public function detail1($id)
    {
        $data = BukuModel::where('kode_buku', $id)->join('kategori','kategori.kategori_buku','buku.kategori_buku')->join('penerbit','penerbit.kode_penerbit','buku.kode_penerbit')->join('pengarang','pengarang.kode_pengarang','buku.kode_pengarang')->get();
        return view('peminjamanbuku.detail_buku', compact('data'));
    }
    public function edit($id)
    {
        $data = PeminjamanModel::where('id_peminjaman', $id)->get();
        return view('peminjamanbuku.edit_peminjaman', compact('data'));
    }
    public function detail($id)
    {
        $data = PeminjamanModel::where('id_peminjaman', $id)->join('buku','buku.kode_buku','peminjaman.kode_buku')->join('siswa','siswa.nisn','peminjaman.nisn')->get();
        return view('peminjamanbuku.detail_peminjaman', compact('data'));
    }

    public function update(Request $request)
    {

        PeminjamanModel::where('id_peminjaman', $request->id)->update([
            'nisn'            => $request->nisn,
            'tgl_pinjam'               => $request->tgl_pinjam,
            'tgl_kembali'              => $request->tgl_kembali,
        ]);
        return redirect()->action('PeminjamanController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }
    public function hapus($id)
    {
        PeminjamanModel::where('id_peminjaman', $id)->delete();

        return redirect()->action('PeminjamanController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function hapus1($id)
    {
        PeminjamanModel::where('id_peminjaman', $id)->delete();

        return redirect()->action('PeminjamanController@kembali')->with('alert_message', 'BERHASIL MENGEMBALIKAN BUKU');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

    public function cetak_pdf()
    {
        set_time_limit(300); // Extends to 5 minutes. // Then return the PDF
        $peminjaman= PeminjamanModel::join('buku','buku.kode_buku','peminjaman.kode_buku')->join('siswa','siswa.nisn','peminjaman.nisn')->get();

        $pdf = \PDF::loadview('laporan',['peminjaman'=>$peminjaman]);
        return $pdf->stream();

    }
}
