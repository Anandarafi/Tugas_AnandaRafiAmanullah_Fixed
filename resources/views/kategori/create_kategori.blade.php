@extends('layoutadmin.template')
@section('title', 'TAMBAH KATEGORI BUKU') 
@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">TAMBAH KATEGORI BUKU</h1>
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

        <form action="{{ url('/kategori/store') }} " method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_kategori">NAMA KATEGORI</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required="required"  placeholder="NAMA KATEGORI">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">CREATES</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
            <td><a href="/kategori" class="btn btn-primary" onclick="return confirm('Kembali??')">KEMBALI</a></td>
          </div>
        </form>
    </div>

  </section>
@endsection