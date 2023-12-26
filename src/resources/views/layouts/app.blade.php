<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Portal Kerja') }} - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  {{-- logo --}}
  <link href="{{ asset('assets/dist/img/logo128.png') }}" rel="shortcut icon" type="image/x-icon">
  {{-- swal --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">

  @yield('stylesheet')
</head>

<body class="sidebar-mini layout-fixed sidebar-collapse layout-navbar-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('assets/dist/img/logo128.png') }}" alt="STTDB Logo" height="60"
        width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light shadow">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/logo128.png') }}" alt="STTDB Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if (Auth::check())
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('assets/dist/img/noprofile.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ $user }}</a>
            </div>
          </div>
        @else
        @endif

        <!-- Sidebar Menu -->
        @if (Auth::check())
          @if (Auth::user()->roles == 'admin')
            @include('layouts.sidebars.admin')
          @elseif (Auth::user()->roles == 'user')
            @include('layouts.sidebars.user')
          @elseif (Auth::user()->roles == 'editor')
            @include('layouts.sidebars.editor')
          @endif
        @else
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('university.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i>
                  <p>
                    Profil Perguruan Tinggi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Kategori
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('cat.informatika') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Informatika
                        <span class="badge badge-info right" id="count_informatika"></span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cat.mesin') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Mesin
                        <span class="badge badge-info right" id="count_mesin"></span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cat.elektro') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Elektro
                        <span class="badge badge-info right" id="count_elektro"></span>
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-laptop-house"></i>
                  <p>
                    Tipe
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('type.onsite') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Onsite
                        <span class="badge badge-info right" id="count_informatika"></span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('type.remote') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Remote
                        <span class="badge badge-info right" id="count_mesin"></span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('type.hybrid') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Hybrid
                        <span class="badge badge-info right" id="count_elektro"></span>
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>
                    Login
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        @endif
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              @if (request()->is('home'))
              @else
                <h1 class="m-0">@yield('title')</h1>
              @endif
            </div>
          </div><!-- /.row -->
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>

      <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button"
        aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
      </a>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Toastr -->
  <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
  <!-- SWAL -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <!-- Custom -->
  @include('layouts.initjs')
  @include('sweet::alert')
  {{-- @include('vendor.sweet.alert') --}}
  {{-- custom field --}}
  @yield('javascript')
  @yield('init')
</body>

</html>
