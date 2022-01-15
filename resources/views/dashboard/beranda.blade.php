@extends('frontend.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 class="text-center">Daftar Buku</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
        <div class="row">
        @foreach ($penulis as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{$item->foto}}" alt="">
              <h4>{{$item->judul}}</h4>
              <span>{{$item->penulis}}</span>
              <p>
                {!! Str::limit($item->diskripsi, 100) !!}
              </p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

@endsection