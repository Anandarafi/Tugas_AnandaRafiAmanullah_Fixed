<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*navbar
Route::get('/','PageController@index');
Route::get('/laporan','PageController@laporan');
Route::get('/peminjaman','PageController@peminjaman');

/*CONTRUCT */
Route::group(['middleware'=>'cek_login'],function(){
    Route::get('/','PageController@index');
    
    Route::get('/buku','BukuController@index');
    Route::get('/buku/edit/{id}', "BukuController@edit");
    Route::post('/buku/update', "BukuController@update") ->name('buku.update');
    Route::get('/create_buku','BukuController@create');
    Route::get('/buku/create','BukuController@create');
    Route::post('/buku/store','BukuController@store') ->name('buku.store');
    Route::get('/buku/hapus/{id}', "BukuController@hapus");
    Route::get('/buku/detail/{id}', "BukuController@detail");
    
    Route::get('/kategori','KategoriController@index');
    Route::get('/kategori/edit/{id}', "KategoriController@edit");
    Route::post('/kategori/update', "KategoriController@update") ->name('kategori.update');
    Route::get('/create_kategori','KategoriController@create');
    Route::get('/kategori/create','KategoriController@create');
    Route::post('/kategori/store','KategoriController@store') ->name('kategori.store');
    Route::get('/kategori/hapus/{id}', "KategoriController@hapus");
    Route::get('/kategori/detail/{id}', "KategoriController@detail");

    Route::get('/penerbit','PenerbitController@index');
    Route::get('/penerbit/edit/{id}', "PenerbitController@edit");
    Route::post('/penerbit/update', "PenerbitController@update") ->name('penerbit.update');
    Route::get('/create_penerbit','PenerbitController@create');
    Route::get('/penerbit/create','PenerbitController@create');
    Route::post('/penerbit/store','PenerbitController@store') ->name('penerbit.store');
    Route::get('/penerbit/hapus/{id}', "PenerbitController@hapus");
    Route::get('/penerbit/detail/{id}', "PenerbitController@detail");

    Route::get('/siswa','SiswaController@index');
    Route::get('/siswa/edit/{id}', "SiswaController@edit");
    Route::post('/siswa/update', "SiswaController@update") ->name('siswa.update');
    Route::get('/create_siswa','SiswaController@create');
    Route::get('/siswa/create','SiswaController@create');
    Route::post('/siswa/store','SiswaController@store') ->name('siswa.store');
    Route::get('/siswa/hapus/{id}', "SiswaController@hapus");
    Route::get('/siswa/detail/{id}', "SiswaController@detail");

    Route::get('/pengarang','PengarangController@index');
    Route::get('/pengarang/edit/{id}', "PengarangController@edit");
    Route::post('/pengarang/update', "PengarangController@update") ->name('pengarang.update');
    Route::get('/create_pengarang','PengarangController@create');
    Route::get('/pengarang/create','PengarangController@create');
    Route::post('/pengarang/store','PengarangController@store') ->name('pengarang.store');
    Route::get('/pengarang/hapus/{id}', "PengarangController@hapus");
    Route::get('/pengarang/detail/{id}', "PengarangController@detail");

    Route::get('/indexbuku','PeminjamanController@minjam');
    Route::get('/create_peminjaman','PeminjamanController@create');
    Route::get('/peminjaman/create','PeminjamanController@create');
    Route::post('/peminjaman/store','PeminjamanController@store') ->name('peminjaman.store');
    Route::get('/peminjaman/detail1/{id}', "PeminjamanController@detail1");

    
    Route::get('/pengembalian','PeminjamanController@kembali');
    Route::get('/peminjaman/hapus1/{id}', "PeminjamanController@edit1");

    Route::get('/peminjaman','PeminjamanController@index');
    Route::get('/peminjaman/edit/{id}', "PeminjamanController@edit");
    Route::post('/peminjaman/update', "PeminjamanController@update") ->name('peminjaman.update');
    Route::get('/peminjaman/hapus/{id}', "PeminjamanController@hapus");
    Route::get('/peminjaman/detail/{id}', "PeminjamanController@detail");
    Route::get('/laporan',"PeminjamanController@cetak_pdf");

});
Route::get('login','LoginController@index');
Route::post('login/cek','LoginController@cek');
Route::get('/register','LoginController@create');
Route::get('/login/create','LoginController@create');
Route::post('/login/store','LoginController@store') ->name('login.store');
Route::get('/logout','LoginController@logout');







