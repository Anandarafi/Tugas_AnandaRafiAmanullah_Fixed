@extends('layoutadmin.template')

@section('title', 'UPDATE DATA ANGGOTA PERPUSTAKAAN') 

@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">UPDATE DATA ANGGOTA PERPUSTAKAAN</h1>
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
        <form action="/siswa/update" method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->nisn}}"> <br/>
          <div class="form-group">
            <label for="nama">NAMA SISWA</label>
            <input type="text" class="form-control" name="nama" value="{{ $datas->nama }}" required="required">
          </div>
          <div class="form-group">
            <label for="nama_kelas">KELAS SISWA</label>
            <input type="text" class="form-control" name="nama_kelas" value="{{ $datas->nama_kelas }}" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
          <tr>
                    <td><a href="/pengarang" class="btn btn-danger" onclick="return confirm('Kembali?')">Ga Jadi ? </a></td>
                    </tr>
        </form>
        @endforeach
    </div>

  </section>
</div>
@endsection