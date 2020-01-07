@extends('layoutadmin.template)

@section('title', 'UPDATE DATA KATEGORI') 

@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">UPDATE DATA KATEGORI</h1>
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
          <input type="hidden" name="id" value="{{ $datas->kategori_buku}}"> <br/>
          <div class="form-group">
            <label for="nama_kategori">NAMA KATEGORI</label>
            <input type="text" class="form-control" name="nama_kategori" value="{{ $datas->nama_kategori }}" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
          </div>
          <tr>
                    <td><a href="/kategori" class="btn btn-danger" onclick="return confirm('Kembali?')">KEMBALI</a></td>
                    </tr>
        </form>
        @endforeach
    </div>

  </section>
</div>
@endsection