@extends('layoutadmin.template')
@section('title', 'DETAIL ANGGOTA PERPUSTAKAAN') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">DETAIL ANGGOTA PERPUSTAKAAN</h1>
      <hr>
          @foreach($data as $datas)
          @endforeach
    </div>
    </div>
        <table class="table table-striped">
            <tr>
                <th>NOMOR INDUK SISWA</th>
                <td>{{ $datas->nisn }}</td>
            </tr>
            <tr>
                <th>NAMA SISWA</th>
                <td>{{ $datas->nama }}</td>
            </tr>
            <tr>
                <th>UMUR SISWA</th>
                <td>{{ $datas->nama_kelas }}</td>
            </tr>
            <tr>
                <th>JENIS KELAMIN SISWA</th>
                <td>{{ $datas->nama_genre }}</td>
            </tr>
        </table>
        <tr>
                    <td><a href="/siswa" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Kembali Ke Masa Lalu?')">Kembali Ke Masa Lalu ? </a></td>
                    </tr>
  </section>
@endsection