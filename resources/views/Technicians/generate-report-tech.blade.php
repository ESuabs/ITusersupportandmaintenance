
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script> 
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
    
          <li class="nav-item">
            <a href="/view-task" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                View Task
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/document-findings" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Document Findings
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/add-out-of-use-devices" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Out of Use Devices
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/generate-report-tech" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Generate Report
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/technician-ai" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Train AI Bot
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/change-password-tech" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Change Password
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/add-meeting-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Meeting Link
                
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
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Generate Report</h2>
           
      
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg" style="padding-left:40px;">Generate Report Form</p>
                  <img src="{{asset('images/report.png')}}" alt="sideimage">
                </div>
      
                <div class="lg:col-span-2">
                  <form action="{{ route('tech-generate-report') }}" method="post">
                    @csrf
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    
                    <div class="md:col-span-5">
                      <label for="last_name">Full Name</label>
                      <input type="text" name="fullname" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Full Name"/>
                    </div>
                    <div class="md:col-span-5">
                      <label for="email">Email Address</label>
                      <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Email Address" />
                    </div>
                   
                    <div class="md:col-span-2">
                      <label for="city">Position / Title</label>
                      <select name="position" id="pos" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        <option value="Technician">Technician</option>
                      </select>
                      @error('position')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
                    </div>
      
                    <div class="md:col-span-3">
                      <label for="city">Campus Name</label>
                      <input type="text" name="campus_name" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Campus Name" />
                    </div>
                    <div class="md:col-span-5">
                      <label for="email">Department</label>
                      <input type="text" name="dep" id="floor" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Department" />
                    </div>
                    <div class="md:col-span-5">
                      <label for="country">Tel</label>
                      <input type="tel" name="tel" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Telephone No." />
                    </div>
      
      
                    <div class="md:col-span-5">
                      <label for="city">Report Summary</label>
                      <textarea name="reports" id="" cols="30" rows="10" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Write a short summary of the report..." style="resize: none;"></textarea>
                     
                    </div>
      
                    
      
            
                    <div class="md:col-span-5 text-right">
                      <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Generate Report</button>
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
