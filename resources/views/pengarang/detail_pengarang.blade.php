@extends('layoutadmin.template')
@section('title', 'DETAIL PENGARANG BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL PENGARANG BUKU</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>KODE PENGARANG</th>
                <td>{{ $datas->kode_pengarang }}</td>
            </tr>
            <tr>
                <th>NAMA PENGARANG</th>
                <td>{{ $datas->nama_pengarang }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/pengarang" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali ?')">KEMBALI</a></td>
                    </tr>
  </section>
@endsection