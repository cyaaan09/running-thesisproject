<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .avatar-pic {
                width: 150px;
            }
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
          </li>

          <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Instructor
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                   <a href="{{ url('instructor') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Instructors</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('instructorsubject') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Subjects Instructors</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Courses
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                   <a href="{{ url('course') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Courses</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('section') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Section</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Subject
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
               <li class="nav-item">
                   <a href="{{ url('subject') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Subject</p>
                  </a>
                </li>

                 <li class="nav-item">
                   <a href="{{ url('subjectdetail') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Subject Detail</p>
                  </a>
                </li>


            </ul>
          </li>



          <li class="nav-item">
            <a href="{{ url('schedule') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Schedules
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
          </li>
          <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Rooms
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                   <a href="{{ url('room') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Room</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('types') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Types of room</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('meetingtime') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Meeting Time
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                logout
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
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

    <!-- Main content -->
    <section class="content">
 <!--      @include('messages.Success')

      @include('messages.errors') -->

      @yield('content')
      


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong><a href="http://adminlte.io">Caraga State University</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('css/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('css/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('css/dist/js/demo.js') }}"></script>
</body>
</html>




