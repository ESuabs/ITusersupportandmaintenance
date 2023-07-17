
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
  <style>
    .button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2px;
  padding: 5px 10px;
  background-color: #dddd;
  border: 1px solid #F53844;
  font: inherit;
  color: #00;
  font-size: 15px;
  font-weight: 400;
  border-radius: 10px;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.3s ease cubic-bezier(0.23, 1, 0.320, 1);
}

.button span {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
}
.button:active {
  transform: scale(0.97);
}
.button::before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  translate: 0 105%;
  background-color: #F53844;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
}

.button svg {
  width: 32px;
  height: 32px;
  fill: #F53844;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
}


 
.button:hover svg {
  fill: #000;
}

@keyframes shake {
  0% {
    rotate: 0deg;
  }

  33% {
    rotate: 10deg;
  }

  66% {
    rotate: -10deg;
  }

  100% {
    rotate: 10deg;
  }
}
  </style>
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
            <a href="/view-task" class="nav-link active">
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
            <a href="/add-out-of-use-devices" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Out of Use Devices
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/generate-report-tech" class="nav-link">
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
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class=" overflow flex items-center justify-center" style="background: #edf2f7;">
        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
      <div class="container max-w-screen-lg mx-auto">
        <div>
           
            <h2 class="font-semibold text-xl text-gray-600">Assigned Tasks List</h2>
<section>
  <div class="table-container">
    <table>
      <thead>
        <tr> 
          <th>
            Table attribute name 
            <div>Email Address</div>
          </th>
          <th> 
            Value
            <div>Request ID</div>
          </th>
          <th>
            Description
            <div>Support Status</div> 
          </th>
          <th>
            Actions
            <div>Actions</div>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data_support as $row)
    <tr>
      <td>{{ $row->Email }}</td>
      <td>{{ $row->RequestNo }}</td>
      <td>{{ $row->SupportStatus }}</td>
      <td class="actions">
        
      
        {{-- <form action="{{ route('cancel_request') }}" method="POST">
          @csrf
          <button class="button">
            <span>Cancel Request
          </span>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
          </span>
          </button>
          
        </form> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addConference">
         Mark as Solved 
     </button>
     <a href="{{ route('go-to-chat') }}" target="_blank"><button type="button" class="btn btn-primary">
     Initiate Chat
  </button></a>
        </td>
      </tr>
    @endforeach
          
          
          
          
          
          
        </tbody>
      </table>
      <!-- Modal -->
  <div class="modal fade" id="addConference" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mark as Solved Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
  <form action="{{ route('solved_request') }}" method="POST">
    @csrf
  <input type="number" name="cancel" placeholder="please enter the request ID" style="width: 100%;height:100%">
  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Mark as Solved</button>
          
        </div>
      </div>
    </div>
  </div>
  
  </form>
  </div>

  {{-- <div class="modal fade" id="addConference2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Meeting Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
  <form action="{{ route('solved_request') }}" method="POST">
    @csrf
  <input type="number" name="cancel" placeholder="please enter the request ID" style="width: 100%;height:100%">
  <input type="text" name="meetinglink" placeholder="please enter the meeting link" style="width: 100%;height:100%">
  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Meeting Link</button>
          <a href="{{ route('go-to-chat') }}" target="_blank"><button type="button" class="btn btn-primary">Initiate Chat</button></a>
        </div>
      </div>
    </div>
  </div>
  
  </form>
  </div> --}}
</section>

<svg xmlns="http://www.w3.org/2000/svg"><symbol viewBox="0 0 32 32" id="icon-bug"><title>bug</title> <g id="svgstoree8e253a41bd40594766d31975045a8cdicomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M32 18v-2h-6.040c-0.183-2.271-0.993-4.345-2.24-6.008h5.061l2.189-8.758-1.94-0.485-1.811 7.242h-5.459c-0.028-0.022-0.056-0.043-0.084-0.064 0.21-0.609 0.324-1.263 0.324-1.944 0-3.305-2.686-5.984-6-5.984s-6 2.679-6 5.984c0 0.68 0.114 1.334 0.324 1.944-0.028 0.021-0.056 0.043-0.084 0.064h-5.459l-1.811-7.242-1.94 0.485 2.189 8.758h5.061c-1.246 1.663-2.056 3.736-2.24 6.008h-6.040v2h6.043c0.119 1.427 0.485 2.775 1.051 3.992h-3.875l-2.189 8.757 1.94 0.485 1.811-7.243h3.511c1.834 2.439 4.606 3.992 7.708 3.992s5.874-1.554 7.708-3.992h3.511l1.811 7.243 1.94-0.485-2.189-8.757h-3.875c0.567-1.217 0.932-2.565 1.051-3.992h6.043z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-checkbox-checked"><title>checkbox-checked</title> <g id="svgstore7715c7df6930e2cbaaa049917e844088icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M0 0v32h32v-32h-32zM30 30h-28v-28h28v28zM24 7l-10 10-6-6-4 4 10 10 14-14-4-4z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-checkbox-unchecked"><title>checkbox-unchecked</title> <g id="svgstorea37cac2102f37bbc0ecc8c33d68a3c33icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M0 0v32h32v-32h-32zM30 30h-28v-28h28v28z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-clone"><title>clone</title> <path d="M20 8v-8h-14l-6 6v18h12v8h20v-24h-12zM6 2.828v3.172h-3.172l3.172-3.172zM2 22v-14h6v-6h10v6l-6 6v8h-10zM18 10.828v3.172h-3.172l3.172-3.172zM30 30h-16v-14h6v-6h10v20z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-close"><title>close</title> <g id="svgstore6b6890cb863395f63053735fed415bceicomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-contract"><title>contract</title> <g id="svgstore3b6036a8c3ddb0d996b5ff19fec56296icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M2 18h12v12l-4.321-4.321-6.313 6.313-3.359-3.359 6.313-6.313zM25.679 22.321l6.313 6.313-3.359 3.359-6.313-6.313-4.321 4.321v-12h12zM30 14h-12v-12l4.321 4.321 6.313-6.313 3.359 3.359-6.313 6.313zM9.679 6.321l4.321-4.321v12h-12l4.321-4.321-6.313-6.313 3.359-3.359z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-edit"><title>edit</title> <path d="M27 0c2.761 0 5 2.239 5 5 0 1.126-0.372 2.164-1 3l-2 2-7-7 2-2c0.836-0.628 1.874-1 3-1zM2 23l-2 9 9-2 18.5-18.5-7-7-18.5 18.5zM22.362 11.362l-14 14-1.724-1.724 14-14 1.724 1.724z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-expand"><title>expand</title> <g id="svgstore86142b5180b42e811349c16209acdf30icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M32 0v12l-4.321-4.321-6.625 6.625-3.359-3.359 6.625-6.625-4.321-4.321zM7.679 4.321l6.625 6.625-3.359 3.359-6.625-6.625-4.321 4.321v-12h12zM27.679 24.321l4.321-4.321v12h-12l4.321-4.321-6.625-6.625 3.359-3.359zM14.304 21.054l-6.625 6.625 4.321 4.321h-12v-12l4.321 4.321 6.625-6.625z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-filter"><title>filter</title> <g id="svgstore05a39582778e77bdfd81a2a362ba4661icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M16 0c-8.837 0-16 2.239-16 5v3l12 12v10c0 1.105 1.791 2 4 2s4-0.895 4-2v-10l12-12v-3c0-2.761-7.163-5-16-5zM2.95 4.338c0.748-0.427 1.799-0.832 3.040-1.171 2.748-0.752 6.303-1.167 10.011-1.167s7.262 0.414 10.011 1.167c1.241 0.34 2.292 0.745 3.040 1.171 0.494 0.281 0.76 0.519 0.884 0.662-0.124 0.142-0.391 0.38-0.884 0.662-0.748 0.427-1.8 0.832-3.040 1.171-2.748 0.752-6.303 1.167-10.011 1.167s-7.262-0.414-10.011-1.167c-1.24-0.34-2.292-0.745-3.040-1.171-0.494-0.282-0.76-0.519-0.884-0.662 0.124-0.142 0.391-0.38 0.884-0.662z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-fire"><title>fire</title> <g id="svgstore99f8f66aa713a598a45feb7b2c3de79aicomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M10.031 32c-2.133-4.438-0.997-6.981 0.642-9.376 1.795-2.624 2.258-5.221 2.258-5.221s1.411 1.834 0.847 4.703c2.493-2.775 2.963-7.196 2.587-8.889 5.635 3.938 8.043 12.464 4.798 18.783 17.262-9.767 4.294-24.38 2.036-26.027 0.753 1.646 0.895 4.433-0.625 5.785-2.573-9.759-8.937-11.759-8.937-11.759 0.753 5.033-2.728 10.536-6.084 14.648-0.118-2.007-0.243-3.392-1.298-5.312-0.237 3.646-3.023 6.617-3.777 10.27-1.022 4.946 0.765 8.568 7.555 12.394z" fill="#000000"/> </symbol><symbol viewBox="0 0 32 32" id="icon-info"><title>info</title> <g id="svgstoref8e31784a775d727116630badae76f45icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13zM14 8h4v4h-4zM20 24h-8v-2h2v-6h-2v-2h6v8h2z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-menu"><title>menu</title> <g id="svgstorecaf457ec69caf7af3eecccf79e5c425bicomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M2 6h28v6h-28zM2 14h28v6h-28zM2 22h28v6h-28z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-minus"><title>minus</title> <g id="svgstore13f54c3fdaed5445635e169651861434icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M0 13v6c0 0.552 0.448 1 1 1h30c0.552 0 1-0.448 1-1v-6c0-0.552-0.448-1-1-1h-30c-0.552 0-1 0.448-1 1z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-plus"><title>plus</title> <g id="svgstore2125ec4618834cc0ed3fb984936c004cicomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M31 12h-11v-11c0-0.552-0.448-1-1-1h-6c-0.552 0-1 0.448-1 1v11h-11c-0.552 0-1 0.448-1 1v6c0 0.552 0.448 1 1 1h11v11c0 0.552 0.448 1 1 1h6c0.552 0 1-0.448 1-1v-11h11c0.552 0 1-0.448 1-1v-6c0-0.552-0.448-1-1-1z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-query"><title>query</title> <path d="M6 4l20 12-20 12z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-remove"><title>remove</title> <g id="svgstore9ca35fe52686367412090a421c3b52b1icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M6 32h20l2-22h-24zM20 4v-4h-8v4h-10v6l2-2h24l2 2v-6h-10zM18 4h-4v-2h4v2z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-revert"><title>revert</title> <path d="M16 2c-4.418 0-8.418 1.791-11.313 4.687l-4.686-4.687v12h12l-4.485-4.485c2.172-2.172 5.172-3.515 8.485-3.515 6.627 0 12 5.373 12 12 0 3.584-1.572 6.801-4.063 9l2.646 3c3.322-2.932 5.417-7.221 5.417-12 0-8.837-7.163-16-16-16z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-run"><title>run</title> <path d="M12 0l-12 16h12l-8 16 28-20h-16l12-12z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-save"><title>save</title> <path d="M6 28h20c3.314 0 6-2.686 6-6h-32c0 3.314 2.686 6 6 6zM26 24h2v2h-2v-2zM30 4h-28l-2 16h32z"/> </symbol><symbol viewBox="0 0 32 32" id="icon-spam"><title>spam</title> <g id="svgstore82a814105a9ed31b0f878b9c13c99e36icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M32 23l-9-23h-14l-9 9v14l9 9h14l9-9v-14l-9-9zM18 26h-4v-4h4v4zM18 18h-4v-12h4v12z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-stack"><title>stack</title> <g id="svgstore2f3f2f6823c842330b8478c2eb0da956icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M32 10l-16-8-16 8 16 8 16-8zM16 4.655l10.689 5.345-10.689 5.345-10.689-5.345 10.689-5.345zM28.795 14.398l3.205 1.602-16 8-16-8 3.205-1.602 12.795 6.398zM28.795 20.398l3.205 1.602-16 8-16-8 3.205-1.602 12.795 6.398z" fill="#ffffff"/> </symbol><symbol viewBox="0 0 32 32" id="icon-warning"><title>warning</title> <g id="svgstore3164276feffd21375191446469b63054icomoon-ignore"> <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/> </g> <path d="M16 4.96l-10.776 23.040h21.552l-10.776-23.040zM16 0v0c0.69 0 1.379 0.465 1.903 1.395l13.659 27.222c1.047 1.86 0.156 3.383-1.978 3.383h-27.166c-2.135 0-3.025-1.522-1.978-3.383l13.659-27.222c0.523-0.93 1.213-1.395 1.903-1.395zM14 24c0-1.105 0.895-2 2-2s2 0.895 2 2c0 1.105-0.895 2-2 2s-2-0.895-2-2zM16 12c1.105 0 2 0.895 2 2l-0.625 6h-2.75l-0.625-6c0-1.105 0.895-2 2-2z" fill="#ffffff"/> </symbol></svg>
       <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:100,200,300,400);
 
 h1 {
	 margin: 0.25em;
}
 section {
	 position: relative;
	 padding-top: 37px;
	 width: 95%;
	 margin: 0 auto;
	 background: #669;
}
 .table-container {
	 overflow-y: auto;
	 height: 20em;
}
 table {
	 border-spacing: 0;
	 border-collapse: collapse;
	 width: 100%;
}
 td, th {
	 border: 0;
	 border-left: 1px solid #eee;
	 background: #e5e5e5;
	 padding: 10px 25px;
}
 td:first-child, th:first-child {
	 border: 0;
}
 tbody tr:nth-child(even) td {
	 background: #f7f7f7;
}
 th {
	 height: 0;
	 line-height: 0;
	 padding-top: 0;
	 padding-bottom: 0;
	 color: transparent;
	 border: none;
	 white-space: nowrap;
}
 th div {
	 position: absolute;
	 background: transparent;
	 color: #fff;
	 padding: 9px 25px;
	 top: 0;
	 margin-left: -25px;
	 line-height: normal;
	 border-left: 1px solid #eee;
}
 th:first-child div {
	 border: none;
}
 .actions {
	 white-space: nowrap;
	 font-size: 0;
}
 .btn {
	 text-transform: uppercase;
	 color: white;
	 display: inline-block;
	 font-size: 12px;
	 font-weight: 100;
	 padding: 0 1em 0 2em;
	 text-decoration: none;
	 margin: 0 0.25em;
	 position: relative;
	 line-height: 2em;
	 min-height: 2em;
	 color: #4e5c85;
	 border: 1px solid #4e5c85;
	 transition: all 0.1s linear;
}
 .btn:hover {
	 cursor: pointer;
	 color: white;
	 border: 1px solid #1b2952;
	 background: #4e5c85;
}
 .btn svg {
	 position: absolute;
	 top: 0.5em;
	 left: 0.5em;
	 height: 1em;
	 fill: currentColor;
}
 .btn.btn-save, .btn.btn-query, .btn.btn-run {
	 color: #339233;
	 border: 1px solid #339233;
	 transition: all 0.1s linear;
}
 .btn.btn-save:hover, .btn.btn-query:hover, .btn.btn-run:hover {
	 cursor: pointer;
	 color: white;
	 border: 1px solid #005f00;
	 background: #339233;
}
 .btn.btn-revert {
	 color: #923333;
	 border: 1px solid #923333;
	 transition: all 0.1s linear;
}
 .btn.btn-revert:hover {
	 cursor: pointer;
	 color: white;
	 border: 1px solid #5f0000;
	 background: #923333;
}
 tbody tr td:last-child {
	 white-space: nowrap;
	 font-size: 0;
	 position: relative;
}
 @media (max-width: 1200px) {
	 tbody tr td:last-child .btn {
		 padding: 0 1em;
		 border: 0;
		 background: transparent;
	}
	 tbody tr td:last-child .btn svg {
		 top: 0.25em;
		 left: 0.25em;
		 height: 1.5em;
	}
	 tbody tr td:last-child .btn span {
		 display: none;
	}
	 tbody tr td:last-child .btn:hover {
		 border: 0;
	}
}
 
       </style>
</div>
    
        
      </div>
    </div>
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
