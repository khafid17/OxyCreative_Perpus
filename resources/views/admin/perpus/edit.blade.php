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
        <h6 class="m-0 font-weight-bold text-primary">Edit Post (Berita)</h6>
      </div>
    <div class="card-body">
  <form action="{{ route('perpus.update', $penulis->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label>Penulis</label>
      <input type="text" class="form-control" name="penulis" value="{{ $penulis->penulis }}">
  </div>
  <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" value="{{ $penulis->judul }}">
  </div>
  <div class="form-group">
      <label>Diskripsi</label>
      <textarea class="form-control" name="diskripsi" id="editor1">{{ $penulis->diskripsi }}</textarea>
  </div>
  <div class="form-group">
      <label>Gambar</label>
      <input type="file" name="foto" class="form-control">
  </div>

  <div class="form-group"> 
      <button class="btn btn-primary btn-block"> Update </button>
    </a>
  </div>
  </div>
  </div>
</div>

  </form>

@endsection