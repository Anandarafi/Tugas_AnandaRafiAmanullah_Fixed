@extends('layoutadmin.template')
@section('title', 'DETAIL KATEGORI BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL KATEGORIi BUKU</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>ID KATEGORI</th>
                <td>{{ $datas->kode_kategori }}</td>
            </tr>
            <tr>
                <th>NAMA KATEGORI</th>
                <td>{{ $datas->nama_kategori }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/kategori" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI</a></td>
                    </tr>
  </section>
@endsection