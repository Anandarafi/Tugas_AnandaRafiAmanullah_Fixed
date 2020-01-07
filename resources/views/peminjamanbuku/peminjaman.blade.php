@extends('layoutadmin.template')
@section('title', 'Data Peminjaman')
@section('container')

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA PEMINJAMAN</h2>
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
                <td align="center">NAMA SISWA</td>
                <td align="center">TANGGAL PEMINJAMAN</td>
                <td align="center">TANGGAL BATAS PENGEMBALIAN</td>
                <td align="center">JUDUL BUKU</td>
                <td align="center">STATUS</td>
                <td align="center">AKSI</td>

              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->nama}}</td>
                <td align="center">{{$data->tgl_pinjam}}</td>
                <td align="center">{{$data->tgl_kembali}}</td>
                <td align="center">{{$data->nama_buku}}</td>
                <td align="center">{{$data->nama_buku}}</td>
                <td>
				            <a href="{{url('/peminjaman/detail/'.$data->id_peminjaman)}}" class="btn btn-info btn-sm">DETAIL</a>
                    <a href="{{url('/peminjaman/edit/'.$data->id_peminjaman)}}" class="btn btn-primary btn-sm">EDIT</a>
                    <a href="/peminjaman/hapus/{{ $data->id_peminjaman }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">DELETE</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
          </div>
    </div>
    @stop
