@extends('layoutadmin.template')
@section('title', 'Tambah Data Buku') 
@section('container')
<div class="container-fluid">
  <section class="main-section">
    <div class="card" style="width:1600px;text-align:center;">
    <div class="col-xl-12">
      <h1 class="text-center">Tambah Data Buku</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ url('/buku/store') }} " method="post" enctype="multimedia/form-data" >
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" required="required"  placeholder="Nama Buku">
          </div>
          <div class="form-group">
            <label for="kategori_buku">Kategori Buku</label><br>
            <select name="kategori_buku" id="kategori_buku" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                @foreach ($kategori as $data)
              <option value="{{ $data->kategori_buku }}" >{{ $data->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="pengarang">Pengarang Buku</label><br>
            <select name="kode_pengarang" id="kode_pengarang" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                @foreach ($pengarang as $data)
              <option value="{{ $data->kode_pengarang }}" >{{ $data->nama_pengarang}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="penerbit">Penerbit Buku</label><br>
            <select name="kode_penerbit" id="kode_penerbit" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                @foreach ($penerbit as $data)
              <option value="{{ $data->kode_penerbit }}" >{{ $data->nama_penerbit }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Penerbit</label>
            <input type="text" class="form-control" name="tahun" id="tahun" required="required" placeholder="Tahun Penerbit">
          </div>
          <div class="form-group">
            <label for="eks">Jumlah Buku</label>
            <input type="text" class="form-control" name="eks" id="eks" required="required" placeholder="Jumlah Buku">
          </div>
          <div class="form-group">
            <label for="foto">Foto Buku</label>
            <input type="file" class="form-control" name="foto" id="foto" required="required" placeholder="Foto Buku">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">CREATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
            <td><a href="/buku" class="btn btn-primary" onclick="return confirm('Kembali')">KEMBALI</a></td>
          </div>
        </form>
    </div>
    </div>

  </section>
@endsection