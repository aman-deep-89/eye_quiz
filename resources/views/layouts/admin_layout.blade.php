<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Panel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('/admin_assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('/admin_assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('/admin_assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ url('/admin_assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  @yield('pageStyles')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>            
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">                 
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ url('/admin_assets/img/user.png') }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{Auth::user()->name }}</div>
              </a> <a href="{{url('admin/settings')}}" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                <i class="fas fa-sign-out-alt"></i> 
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('/admin') }}"> <img alt="image" src="{{ url('/admin_assets/img/logo.png') }}" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="{{ url('admin') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Responses</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('admin/view_all') }}">View All</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Question Manager</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('category.index') }}">View Category</a></li>
                <li><a class="nav-link" href="{{ route('question.index') }}">View Questions</a></li>
              </ul>
            </li>            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
        </section>       
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          {{ date('j-m-Y h:i A')}}
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ url('/admin_assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ url('/admin_assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ url('/admin_assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ url('/admin_assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ url('/admin_assets/js/custom.js') }}"></script>
  @yield('pageScripts')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>