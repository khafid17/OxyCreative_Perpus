@extends('layouts.master')

@section('content')
<div class="main-content">

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Data Berita Hapus</h4>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
				<th>No</th>
				<th>Nama Post</th>
				{{-- <th>Kategori</th> --}}
				<th>Daftar Tags</th>
				<th>Thumbnail</th>
				<th>Action</th>
            </tr>
            </thead>
			<tbody>
				@php
					$no = 1;
				@endphp
			@foreach ($post as $result => $hasil)
				<tr>
					<td>{{$no++}}</td>
					<td>{{ $hasil->judul }}</td>
					{{-- <td>{{ $hasil->category->name }}</td> --}}
					<td>@foreach($hasil->tags as $tag)
				<ul>
					<li>{{ $tag->name }}</li>
				</ul>
			@endforeach		
				</td>
				<td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
				<td>
					<form action="{{ route('post.kill', $hasil->id ) }}" method="POST">
					@csrf
					@method('delete')
					<a href="{{ route('post.restore', $hasil->id )}}" class="btn btn-info btn-sm">Restore</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
				</tr>
			@endforeach
			</tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection