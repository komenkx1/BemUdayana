<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="/assets/bem_images/icon.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{Route('dashboard')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('blog-admin')}}">
              <i class="ni ni-single-copy-04 text-orange"></i>
              <span class="nav-link-text">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('hotline')}}">
              <i class="ni ni-send text-grey"></i>
              <span class="nav-link-text">HotLines</span>
            </a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>