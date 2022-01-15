@extends('layouts.master')
@section('title', 'Admin - User')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div>
	@endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('user.create')}}" class="btn btn-dark float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah User</a>
            <h5 class="m-0 font-weight-bold text-dark">Data User</h5>
        </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                      <thead>
                          <tr>
							<th>No</th>
							<th>Nama User</th>
							<th>Email</th>
							<th>Action</th>
                          </tr>
                      </thead>
					  <tbody>
					@php
						$no = 1;
					@endphp
						@foreach ($user as $result => $hasil)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $hasil->name }}</td>
							<td>{{ $hasil->email }}</td>

							<td>
								<form action="{{ route('user.destroy', $hasil->id )}}" method="POST">
									@csrf
									@method('delete')
								<a href="{{ route('user.edit', $hasil->id ) }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
								<button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('apa kamu yakin akan menghapus data?')"><i class="fas fa-fw fa-trash"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
                  </table>
              </div>
          </div>
      </div>

@endsection
