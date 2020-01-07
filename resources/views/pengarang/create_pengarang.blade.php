@extends('layoutadmin.template')
@section('title', 'DAFTAR PENGARANG BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH PENGARANG BUKU</h1>
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

        <form action="{{ url('/pengarang/store') }} " method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_pengarang">NAMA PENGARANG</label>
            <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" required="required"  placeholder="NAMA PENGARANG">
          </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">CREATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
            <td><a href="/pengarang" class="btn btn-primary" onclick="return confirm('Kembali??')">KEMBALI</a></td>
          </div>
        </form>
    </div>

  </section>
@endsection