@extends('layoutadmin.template')
@section('title', 'ANGGOTA PERPUSTAKAAN')
@section('container')

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >ANGGOTA PERPUSTAKAAN</h2>
          </div>
          <div class="panel-body">
            @if(Session::get('alert_message'))
                <div class="alert alert-success">
                  <strong>{{Session::get('alert_message')}}</strong>
                </div>
            @endif
            <table class="table  table-hover table-striped w-full" style="background :#7F8C8D;width:1570px;">
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;font-size:10pt;" >
                <td align="center">NO</td>
                <td align="center">NOMOR INDUK SISWA</td>
                <td align="center">NAMA SISWA</td>
                <td align="center">KELAS SISWA</td>
                <td align="center">JENIS KELAMIN</td>
                <td align="center">AKSI</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->nisn}}</td>
                <td align="center">{{$data->nama}}</td>
                <td align="center">{{$data->nama_kelas}}</td>
                <td align="center">{{$data->nama_genre}}</td>
                <td><a href="{{url('/siswa/detail/'.$data->nisn)}}" class="btn btn-info btn-sm"><i class='fa fa-2x fa-file-text'></i></a>
                    <a href="{{url('/siswa/edit/'.$data->nisn)}}" class="btn btn-primary btn-sm"><i class='fa fa-2x fa-pencil-square'></i></a>
                    <a href="/siswa/hapus/{{ $data->nisn }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class='fa fa-2x fa-trash'></i></a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/create_siswa"class="btn btn-success" style="margin-top:5px;margi-bottom:5px;">TAMBAH DATA</a>
          </div>
          </div>
    </div>
    @stop
