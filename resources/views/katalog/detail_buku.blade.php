@extends('layoutadmin.template')
@section('title', 'DETAIL  BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL BUKU</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
    <div class="profile-main" align="center">
        <img src="{{asset('images/'.$datas->foto)}}" class="img-circle" alt="Foto">
        <h3 class="name">{{ $datas->nama_buku }}</h3>
    </div>
        <table class="table table-striped">
        <tr>
                <th>KODE BUKU</th>
                <td>{{ $datas->kode_buku }}</td>
            </tr>
            <tr>
                <th>KATEGORI BUKU</th>
                <td>{{ $datas->nama_kategori }}</td>
            </tr>
            <tr>
                <th>PENGARANG BUKU</th>
                <td>{{ $datas->nama_pengarang }}</td>
            </tr>
            <tr>
                <th>PENERBIT BUKU</th>
                <td>{{ $datas->nama_penerbit }}</td>
            </tr>
            <tr>
                <th>TAHUN PEMBUATAN BUKU</th>
                <td>{{ $datas->tahun }}</td>
            </tr>
            <tr>
                <th>JUMLAH BUKU</th>
                <td>{{ $datas->jumlah }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/buku" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI</a></td>
                    </tr>
  </section>
@endsection