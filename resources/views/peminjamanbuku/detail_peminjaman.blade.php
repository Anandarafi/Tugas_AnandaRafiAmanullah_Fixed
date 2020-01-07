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
                <th>ID PEMINJAMAN</th>
                <td>{{ $datas->id_peminjaman }}</td>
            </tr>
            <tr>
                <th>NAMA PEMINJAM</th>
                <td>{{ $datas->nama }}</td>
            </tr>
            <tr>
                <th>TANGGAL PEMINJAMAN</th>
                <td>{{ $datas->tgl_pinjam }}</td>
            </tr>
            <tr>
                <th>TANGGAL BATAS KEMBALI</th>
                <td>{{ $datas->tgl_kembali }}</td>
            </tr>
            <tr>
                <th>JUMLAH PINJAMAN</th>
                <td>{{ $datas->jumlah }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/peminjaman" class="btn btn-info">KEMBALI</a></td>
                    </tr>
  </section>
@endsection