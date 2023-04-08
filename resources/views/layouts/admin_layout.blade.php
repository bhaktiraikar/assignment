@include('layouts.admin_head')

<body class="navbar-dark">

  <div class="main-wrapper">

    <!-- partial:partials/_navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar">
        <div class="container">
          <div class="navbar-content">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{Route('adminLogout')}}" class="nav-link">
                  <i class="" data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @include('layouts.admin_nav')

    </div>
    <!-- partial -->

    <div class="page-wrapper">

      <div class="page-content">

        @yield('content')

      </div>

      @include('layouts.admin_footer')
      <script src="{{asset('admin_assets/vendors/chartjs/Chart.min.js')}}"></script>
      <script src="https://documentservices.adobe.com/view-sdk/viewer.js"></script>
      <script type="text/javascript" src="{{asset('js/admin/datepicker.js')}}"></script>
      
      @yield('script')