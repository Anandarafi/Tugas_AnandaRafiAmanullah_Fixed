<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\SiswaModel;

class SiswaController extends Controller
{
    public function index()
    {
        $data['datas']=SiswaModel::join('genre','genre.genre','siswa.genre')->join('kelas','kelas.kelas','siswa.kelas')->get(); 
        return view("siswa.siswa",$data);
    }
    
    public function create()
    {
        return view('siswa.create_siswa');
    }
    public function store(Request $request)
    {
        SiswaModel::create([
            'nama'         => $request->nama,
            'kelas'               => $request->kelas,
            'genre'    => $request->genre,
        ]);
        
        return redirect()->action('SiswaController@index')->with('alert_message', 'Berhasil Menambah Data siswa ');
    }
    public function edit($id)
    {
        $data = siswaModel::where('nisn', $id)->get();
        return view('siswa.edit_siswa', compact('data'));
    }
    public function detail($id)
    {
        $data = siswaModel::where('nisn', $id)->join('genre','genre.genre','siswa.genre')->join('kelas','kelas.kelas','siswa.kelas')->get();
        return view('siswa.detail_siswa', compact('data'));
    }

    public function update(Request $request)
    {

        siswaModel::where('nisn', $request->id)->update([
            'nama'         => $request->nama,
            'kelas'               => $request->kelas,
        ]);
        return redirect()->action('SiswaController@index')->with('alert_message', 'Berhasil Mengubah Data');

    }

    public function hapus($id)
    {
        siswaModel::where('nisn', $id)->delete();

        return redirect()->action('SiswaController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

}
