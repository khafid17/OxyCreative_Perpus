@extends('layouts.master')

@section('content')
     <!-- Begin Page Content -->
    <div class="container-fluid mb-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman Utama Perpustakaan </h1>
        </div>

        <!-- Content Row -->
        <div class="row">
        <div class="card shadow border-bottom-primary">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Selamat Datang di Perpustakaan Online
                </h6>
                
            </div>
            <div class="card-body">
                <img src="{{asset('admin/img/perpus.jpg')}}" class="img-fluid">
                <p>
                Perpustakaan sekolah merupakan perpustakaan yang berada pada satuan pendidikan formal di lingkungan pendidikan dasar dan menengah yang merupakan bagian integral dari kegiatan sekolah yang bersangkutan, dan merupakan pusat sumber belajar untuk mendukung tercapainya tujuan pendidikan sekolah yang bersangkutan. Untuk mencapai tujuan tersebut perpustakaan sekolah seharusnya menyediakan sarana prasarana yang dapat memenuhi standar untuk pelayanan, selain koleksi yang kuat.
                </p>
                <div class="row mt-3 text-center">
                    <div class="col-md-6">
                        <h1>
                            <i class="fa fa-address-book"></i>
                        </h1>
                        <h3>
                            Kontak 
                        </h3>
                        <p>0291-685322 Psw.123</p>
                    </div>
                    <div class="col-md-6">
                        <h1>
                            <i class="fa fa-map-marker"></i>
                        </h1>
                        <h3>
                            Alamat 
                        </h3>
                        <p>Bagian Hukum Sekretariat Daerah Kabupaten Demak. Jalan Kyai Singkil No.7 Bintoro Demak, Jawa Tengah, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->


    
@endsection
