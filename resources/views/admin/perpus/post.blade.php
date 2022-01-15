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
        <h4 class="m-0 font-weight-bold text-primary">Berita</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Post</th>
                        <th>Kategori</th>
                        <th>Daftar Tags</th>
                        <th>Creator</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($post as $result => $hasil)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $hasil->judul }}</td>
                        <td>{{ $hasil->category->name }}</td>
                        <td>@foreach($hasil->tags as $tag)
                            <ul>
                                <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                            </ul>
                            @endforeach
                        </td>
                        <td>{{$hasil->users->name }}</td>
                        <td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
      
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection

