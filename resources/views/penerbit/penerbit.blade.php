@extends('layoutadmin.template')
@section('title', 'PENERBIT BUKU')
@section('container')

<br>
    <div class="container-fluid">
          <div class="card">
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >PENERBIT BUKU</h2>
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
                <td align="center">KODE PENERBIT</td>
                <td align="center">NAMA PENERBIT</td>
                <td align="center">AKSI</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->kode_penerbit}}</td>
                <td align="center">{{$data->nama_penerbit}}</td>
                <td><a href="{{url('/penerbit/detail/'.$data->kode_penerbit)}}" class="btn btn-info btn-sm">DETAIL</a>
                    <a href="{{url('/penerbit/edit/'.$data->kode_penerbit)}}" class="btn btn-primary btn-sm">EDIT</a>
                    <a href="/penerbit/hapus/{{ $data->kode_penerbit }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">DELETE</a>
                </td>
              </tr>
              @endforeach
            </table>
            <a href="/create_penerbit"class="btn btn-success" style="margin-top:5px;margi-bottom:5px;">TAMBAH DATA</a>
          </div>
          </div>
    </div>
    @stop
