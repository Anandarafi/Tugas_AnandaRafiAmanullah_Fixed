<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuModel;
use App\SiswaModel;

class PageController extends Controller
{


    public function laporan(){
        return view('laporan');
    }

    public function __construct(){
        $this->middleware('cek_login');
    }

    public function index(){
        $buku1 = BukuModel::count();
        $siswa1 = SiswaModel::count();
        return view('welcome', compact('buku1','siswa1'));
    }



    
}
