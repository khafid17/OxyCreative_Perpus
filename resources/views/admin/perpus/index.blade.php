@extends('layouts.master')
@section('title', 'Admin - Berita')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        @if (auth()->user()->level==1)
            <a href="{{ route('perpus.create') }}" class="btn btn-info float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Buku</a>
        @endif
        <h4 class="m-0 font-weight-bold text-primary">Data Buku</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penulis</th>
                        <th>Judul</th>
                        <th>Diskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($penulis as $result => $hasil)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $hasil->penulis }}</td>
                        <td>{{ $hasil->judul }}</td>
                        <td>{!! $hasil->diskripsi !!}</td>
                        <td><img src="{{ $hasil->foto  }}" class="img-fluid" style="width:100px"></td>
                        @if (auth()->user()->level==1)
                        <td>
                            <form action="{{ route('perpus.destroy', $hasil->id )}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('perpus.edit', $hasil->id ) }}" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm"
								onclick="return confirm('apa kamu yakin akan menghapus data?')"><i class="fas fa-fw fa-trash"></i></button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection

