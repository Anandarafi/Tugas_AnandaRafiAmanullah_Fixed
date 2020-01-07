@extends('layoutadmin.template')
@section('title', 'Tambah Data Buku') 
@section('container')
<div class="container-fluid">
  <section class="main-section">
    <div class="card" style="width:1600px;text-align:center;">
    <div class="col-xl-12">
      <h1 class="text-center">MINJAM BUKU</h1>
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

        <form action="{{ url('/peminjaman/store') }} " method="post" enctype="multimedia/form-data" >
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nisn">NAMA SISWA</label>
			<select name="nisn" id="nisn" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                @foreach ($siswa as $data)
              <option value="{{ $data->nisn }}" >{{ $data->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="tgl_pinjam">Tanggal Peminjaman</label><br>
			<input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" required="required">
          </div>
          <div class="form-group">
            <label for="tgl_kembali">Tanggal Kembali (1 Minggu)</label>
            <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" required="required">
          </div>
		  <div class="form-group">
            <label for="kode_buku">JUDUL BUKU</label>
			<select name="kode_buku" id="kode_buku" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20" style="width:1500px;text-align:Center;">
                @foreach ($buku as $data)
              <option value="{{ $data->kode_buku }}" >{{ $data->nama_buku }}</option>
              @endforeach
            </select>
          </div>
		  <div class="form-group">
            <label for="jumlah">Jumlah Pinjam </label>
            <input type="text" class="form-control" name="jumlah" id="jumlah1" required="required" placeholder="Jumlah Pinjaman">
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