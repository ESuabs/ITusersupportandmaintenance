
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset('vendor/chatify/css/app.css') }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  <title>@yield('title')</title>
<base href="{{ \URL::to('/') }}">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
/>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-to-bracket"></i>
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ \URL::to('/') }}" class="brand-link">
      <img src=" {{asset('images/aau logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AAU Support</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=" {{asset('images/person.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Support Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/submit-support-request" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Submit Support Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/view-request-status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Request Status</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/feedback" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Send Feedback
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/change-password-user" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Change Password
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class=" overflow flex items-center justify-center" style="background: #edf2f7;">
      @include('flash-message')
        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
      <div class="container max-w-screen-lg mx-auto">
        <div>
          <h2 class="font-semibold text-xl text-gray-600">Request Support Form</h2>
          <p class="text-gray-500 mb-6">One-click, Multiple Solutions.</p>
    
          <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
              <div class="text-gray-600">
                <p class="font-medium text-lg">User Problem Reporting Form (ICTF-02)</p>
                <img src="{{asset('images/request.jpg')}}" alt="sideimage">
              </div>
    
              <div class="lg:col-span-2">
                <form action="{{ route('support-request') }}" method="post">
                  @csrf
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                  <div class="md:col-span-5">
                    <label for="full_name">Reported By: Name</label>
                    <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->name  }}" placeholder="Full Name" disabled/>
                  </div>
    
                  <div class="md:col-span-5">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->email  }}" placeholder="Email Address" disabled/>
                  </div>
                 
                  <div class="md:col-span-3">
                    <label for="address">Faculty</label>
                    <input type="text" name="faculty" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Faculty Name" />
                  </div>
    
                  <div class="md:col-span-2">
                    <label for="city">Department</label>
                    <input type="text" name="dep" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Department Name" />
                  </div>
                  <div class="md:col-span-5">
                    <label for="email">Floor / Office</label>
                    <input type="text" name="floor" id="floor" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Floor, Office Number" />
                  </div>
                  <div class="md:col-span-5">
                    <label for="country">Tel</label>
                    <input type="text" name="tel" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Telephone No." />
                  </div>
    
                  
    
                  {{-- <div class="md:col-span-2">
                    <label for="zipcode">Time</label>
                    <input type="time" name="time" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Time (LT)" value="" />
                  </div> --}}
    
                  
    
          
                  <div class="md:col-span-5 text-right">
                    <div class="inline-flex items-end">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </div>
                  </div>
    
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    
        
      </div>
    </div>
    <script src="{{ asset('vendor/chatify/js/app.js') }}"></script>

    </body>
    </html>
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

    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="{{ \URL::to('/') }}">AAU Remote Support</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
