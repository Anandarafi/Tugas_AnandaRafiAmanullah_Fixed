@extends('layoutadmin.template')
@section('title', 'DETAIL PENERBIT BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL PENERBIT BUKU</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>KODE PENERBIT</th>
                <td>{{ $datas->kode_penerbit }}</td>
            </tr>
            <tr>
                <th>NAMA PENERBIT</th>
                <td>{{ $datas->nama_penerbit }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/penerbit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">KEMBALI </a></td>
                    </tr>
  </section>
@endsection