<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" c ontent="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Schedura Admin</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{ asset('assets/images/logo-mini.svg') }}"
            alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face15.jpg') }}" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                @auth
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                @else
                  <h5 class="mb-0 font-weight-normal"></h5>
                @endauth
                <span>Gold Member</span>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item nav-category"><span class="nav-link">Navigation</span></li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="guru">
            <span class="menu-icon"><i class="mdi mdi-view-dashboard"></i></span>
            <span class="menu-title">Guru</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/kelas') }}">
            <span class="menu-icon"><i class="mdi mdi-book-open-page-variant"></i></span>
            <span class="menu-title">Kelas</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/jadwal') }}">
            <span class="menu-icon"><i class="mdi mdi-calendar-clock"></i></span>
            <span class="menu-title">Jadwal</span>
          </a>
        </li>

        <!-- Logout button -->
        <li class="nav-item menu-items">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link border-0 bg-transparent w-100 text-left d-flex align-items-center">
              <span class="menu-icon"><i class="mdi mdi-logout text-danger"></i></span>
              <span class="menu-title">Logout</span>
            </button>
          </form>
        </li>
      </ul>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid page-body-wrapper">
      <!-- Navbar -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('assets/images/logo-mini.svg') }}"
              alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search">
              </form>
            </li>
          </ul>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face15.jpg') }}" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">
                    @auth
                      {{ Auth::user()->name }}
                    @else
                      Guest
                    @endauth
                  </p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item preview-item border-0 bg-transparent w-100 text-left">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main panel -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Tulisan Selamat Datang -->
          <div class="row mb-4">
            <div class="col-12 text-center">
              <h2 class="fw-bold">Selamat datang di <span class="text-primary">Schedura</span> 🎉</h2>
              <p class="text-muted">Sistem Informasi Penjadwalan Guru dan Kelas</p>
            </div>
          </div>

          @yield('content') {{-- INI YANG PENTING UNTUK MENAMPILKAN ISI HALAMAN --}}
        </div>

        <!-- Footer -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
              bootstrapdash.com</span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- JS scripts -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
</body>

</html>
