  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo-dark.png" alt="">

      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#team">Fungsionaris</a></li>
          <!-- <li><a class="nav-link scrollto" href="#proker">Program Kerja</a></li> -->
          <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
          <li><a class="nav-link scrollto" href="#podCastJurnal">Jurnal & Poadcast</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Open Recruitment Big Event</a></li>
              <li><a href="{{Route('lembaga-mahasiswa')}}" class="@if($title == "Lembaga Mahasiswa") active @endif" >Lembaga Mahasiswa</a></li>
              <li><a href="{{Route('ukm')}}" class="@if($title == "Unit Kegiatan Mahasiswa") active @endif" >UKM</a></li>
              <li><a href="{{Route('paguyuban')}}" class="@if($title == "Paguyuban Dan Forum Agama") active @endif">Paguyuban Dan Forum Agama</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="{{Route('kontak')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->