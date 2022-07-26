
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <style>
    .ck-editior__editable_inline{
        min-height: 400px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>

      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Student Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/student" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Students

              </p>
            </a>
          </li>

          <!-- parents -->
          <li class="nav-item">
            <a href="/parents" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>
                Parents

              </p>
            </a>
          </li>

          <!-- Teachers -->
          <li class="nav-item">
            <a href="/teacher" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Teachers

              </p>
            </a>
          </li>

          <!-- class -->
          <li class="nav-item">
            <a href="/class" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Class
              </p>
            </a>
          </li>

          <!-- Activities -->
          <li class="nav-item">
            <a href="/activity" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Activities

              </p>
            </a>
          </li>

          <!-- child Feedback -->
          <li class="nav-item">
            <a href="/feedback" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Child Feedback

              </p>
            </a>
          </li>

          <!-- Time table -->
          <li class="nav-item">
            <a href="/timetable" class="nav-link">
              <i class="nav-icon fas fa-route"></i>
              <p>
                Time Table

              </p>
            </a>
          </li>

          <!-- Emergency People -->
          <li class="nav-item">
            <a href="/emergency" class="nav-link">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Emergency People

              </p>
            </a>
          </li>

          <!-- Medication -->
          <li class="nav-item">
            <a href="/medication" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Medication

              </p>
            </a>
          </li>

          <!-- Fees -->
          <li class="nav-item">
            <a href="/fee" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Fees

              </p>
            </a>
          </li>

          <!-- Sibling -->
          <li class="nav-item">
            <a href="/sibling" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Sibiling

              </p>
            </a>
          </li>

          <!-- Staff -->
          <li class="nav-item">
            <a href="/staff" class="nav-link">
              <i class="nav-icon fas fa-male"></i>
              <p>
                Staff

              </p>
            </a>
          </li>
          <!-- logout -->
          <li class="nav-item">

            <a class="dropdown-item" href="{{ route('logout') }}"

            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}

        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Designed by Suraj
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href=""></a></strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
</html>
