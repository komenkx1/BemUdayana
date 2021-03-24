 
    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">

        <!-- Logo container-->
        <div>
            <a class="logo" href="bem_index.html">
                <img src="/assets/bem_images/logo-light.png" class="l-dark" height="50" alt="">
                <img src="/assets/bem_images/logo-dark.png" class="l-light" height="50" alt="">
            </a>
        </div>
        <!-- End Logo container-->

        <div class="menu-extras">
            <div class="menu-item">

                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->

            </div>
        </div>

        <!-- Navigation Menu-->
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                <li><a href="/">Beranda</a></li> 
                <li class="has-submenu">
                    <a href="javascript:void(0)">Tentang</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{Route('tentang')}}">Fungsionaris</a></li>
                        <li><a href="{{Route('program-kerja')}}">Program Kerja</a></li>
                        <li><a href="{{Route('kontak')}}">Kontak</a></li>
                    </ul>
                </li>
                <li><a href="{{Route('blog')}}">Blog</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Informasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="perekrutan_terbuka.html">Open Recruitment Big Events</a></li>
                        <li><a href="{{Route('lembaga-mahasiswa')}}">Lembaga Mahasiswa</a></li>
                        <li><a href="{{Route('ukm')}}">UKM</a></li>
                        <li><a href="{{Route('paguyuban')}}">Paguyuban dan Forum Agama</a></li>
                        <li><a href="{{Route('asrama')}}">Info Asrama</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->