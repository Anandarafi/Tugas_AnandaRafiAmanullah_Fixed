@extends('layoutadmin.template)

@section('title', 'UPDATE DATA BUKU') 

@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">UPDATE DATA BUKU</h1>
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
        <form action="/kategori/update" method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->kode_buku}}"> <br/>
          <div class="form-group">
            <label for="nama_buku">NAMA BUKU</label>
            <input type="text" class="form-control" name="nama_buku" value="{{ $datas->nama_buku }}" required="required">
          </div>
          <div class="form-group">
            <label for="jumlah">JUMLAH BUKU</label>
            <input type="text" class="form-control" name="jumlah" value="{{ $datas->jumlah }}" required="required">
          </div>
          <div class="form-group">
            <label for="foto">FOTO BUKU</label>
            <input type="file" class="form-control" name="foto" value="{{ $datas->foto }}" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
          </div>
          <tr>
                    <td><a href="/buku" class="btn btn-danger" onclick="return confirm('Kembali?')">KEMBALI</a></td>
                    </tr>
        </form>
        @endforeach
    </div>

  </section>
</div>
@endsection