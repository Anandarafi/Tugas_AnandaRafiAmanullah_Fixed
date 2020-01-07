@extends('layoutadmin.template')

@section('title', 'UPDATE DATA PENGARANG BUKU') 

@section('container')
<div class="container">
  <section class="main-section">
    <div class="content">
      <h1 class="text-center">UPDATE DATA PENGARANG BUKU</h1>
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
        <form action="/pengarang/update" method="post" enctype="multimedia/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $datas->kode_pengarang}}"> <br/>
          <div class="form-group">
            <label for="nama_pengarang">NAMA PENGARANG</label>
            <input type="text" class="form-control" name="nama_pengarang" value="{{ $datas->nama_pengarang }}" required="required">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-danger">CANCEL</button>
          </div>
          <tr>
                    <td><a href="/pengarang" class="btn btn-danger" onclick="return confirm('Kembali?')">KEMBALI</a></td>
                    </tr>
        </form>
        @endforeach
    </div>

  </section>
</div>
@endsection