@extends('layouts.master')
@section('title', 'Admin - Berita')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif
  <div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Buku</h6>
        </div>
    <div class="card-body">
  <form action="{{ route('perpus.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>Nama Penulis</label>
      <input type="text" class="form-control" name="penulis">
  </div>
  <div class="form-group">
      <label>Judul Buku</label>
      <input type="text" class="form-control" name="judul">
  </div>

  <div class="form-group">
      <label>diskripsi</label>
      <textarea class="form-control" name="diskripsi" id="editor1" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
      <label>Gambar</label>
      <input type="file" name="foto" class="form-control">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan</button>
  </div>

  </form>
        </div>
    </div>
</div>
{{-- <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script> --}}
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script >
//   CKEDITOR.replace( 'content' );

</script>

@endsection