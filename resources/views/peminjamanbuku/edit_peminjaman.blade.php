@extends('layoutadmin.template')

@section('title', 'PENGEMBALIAN BUKU') 

@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">PENGEMBALIAN BUKU</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="/peminjaman/update1" method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->id_peminjaman}}"> <br/>
          <div class="form-group">
            <label for="nama">NAMA SISWA</label>
            <input type="text" class="form-control" name="nama" value="{{ $datas->nama }}" required="required">
          </div>
          <div class="form-group">
            <label for="tgl_kembali">TANGGAL BATAS PENGEMBALIAN </label>
            <input type="date" class="form-control" name="tgl_kembali" value="{{ $datas->tgl_kembali }}" required="required">
          </div>
          <div class="form-group">
            <label for="status1">STATUS </label>
            <input type="text" class="form-control" name="status1" value="BELOM" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
          </div>
          <tr>
                    <td><a href="/peminjaman" class="btn btn-danger" onclick="return confirm('Kembali?')">KEMBALI</a></td>
                    </tr>
        </form>
        @endforeach
    </div>

  </section>
</div>
@endsection