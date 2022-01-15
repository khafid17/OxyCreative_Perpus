  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center shadow">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="">Perpus</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Daftar Buku</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->