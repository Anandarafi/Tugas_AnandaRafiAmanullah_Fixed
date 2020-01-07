@extends('layoutadmin.template')
@section('title', 'DAFTAR ANGGOTA PERPUSTAKAAN') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH ANGGOTA PERPUSTAKAAN</h1>
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

        <form action="{{ url('/siswa/store') }} " method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama">NAMA SISWA</label>
            <input type="text" class="form-control" id="nama" name="nama" required="required"  placeholder="NAMA SISWA">
          </div>
          <div class="form-group">
            <label for="kelas">KELAS SISWA</label><br>
            <select name="kelas" id="kelas" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10" >
                @foreach ($kelas as $data)
              <option value="{{ $data->kelas }}" >{{ $data->nama_kelas }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="jenis">JENIS KELAMIN</label><br>
            <select name="genre" id="genre" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="10">
                @foreach ($genre as $data)
              <option value="{{ $data->genre }}" >{{ $data->nama_genre }}</option>
              @endforeach
            </select>          
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            <td><a href="/siswa" class="btn btn-primary" onclick="return confirm('Kembali??')">Ga Jadi</a></td>
          </div>
        </form>
    </div>

  </section>
@endsection