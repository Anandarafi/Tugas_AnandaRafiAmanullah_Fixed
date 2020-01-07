@extends('layoutadmin.template')
@section('title', 'Data Buku')
@section('container')

<br>
    <div class="container-fluid">
          <div class="card">
          <a href="/create_peminjaman" class="btn btn-info btn-sm">MINJAM BUKU<i class='fa fa-1x fa-file-text'></i></a>
          <div class="header">
            <h2 style="color:black;padding:5px;font-family:Arial, Helvetica, sans-serif;" align='center' >DATA BUKU</h2>
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
                <td align="center">NAMA BUKU</td>
                <td align="center">KATEGORI BUKU</td>
                <td align="center">PENGARANG</td>
                <td align="center">PENERBIT</td>
                <td align="center">TAHUN PENERBIT</td>
                <td align="center">JUMLAH BUKU</td>
                <td align="center">FOTO</td>
              </tr>
              @php $no=0; @endphp
              @foreach($datas as $data)
              @php $no++; @endphp
              <tr style="color:white;padding:10px;font-family:Arial, Helvetica, sans-serif;">
                <td align="center">{{$no}}</td>
                <td align="center">{{$data->nama_buku}}</td>
                <td align="center">{{$data->nama_kategori}}</td>
                <td align="center">{{$data->nama_pengarang}}</td>
                <td align="center">{{$data->nama_penerbit}}</td>
                <td align="center">{{$data->tahun}}</td>
                <td align="center">{{$data->eks}}</td>
                <td><img width="40" src="{{asset('images/'.$data->foto)}}"></td>
                <td>
                    <a href="{{url('/peminjaman/detail1/'.$data->kode_buku)}}" class="btn btn-info btn-sm">DETAIL</a>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
          </div>
    </div>
    @stop
