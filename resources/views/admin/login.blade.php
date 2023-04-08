<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Rebound plastic exchange">
  <meta name="author" content="Rebound">
  <meta name="keywords" content="rebound">

  <title>Rebound - Admin Panel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('admin_assets/css/theme/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}" />

  <style>
    .border {
      border-color: red !important;
    }

    .preloader {
      align-items: center;
      background: #FFF;
      display: flex;
      height: 100vh;
      justify-content: center;
      left: 0;
      position: fixed;
      top: 0;
      transition: opacity 0.2s linear;
      width: 100%;
      z-index: 9999;
      opacity: 1;
      transform: opacity 1s linear;
    }
  </style>
</head>

<body>
  <div style="display:none;" id="preloader" class="preloader">
    <!-- <img src="https://loading.io/asset/640525" alt="spinner"> -->
  </div>
  <div class="main-wrapper">
    <div class="page-wrapper full-page bg-primary">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-6 col-xl-4 mx-auto">
            <div class="card">

              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2 text-center"><img src="{{asset('assets/rebound_logo.png')}}" alt="" width="300"></a>
                <h5 class="text-muted fw-normal mb-4 text-center">Welcome back! Log in to your account.</h5>
                <form id="loginForm" class="forms-sample" method="post" action="{{Route('adminLogin')}}">
                  @csrf
                  <div id="loginErrorDiv" style="display:none;" class="alert alert-danger" role="alert">
                    Please fill required fields.
                  </div>
                  @if(session()->has('message'))
                  <div class="alert alert-danger" role="alert">
                    {{session()->get('message')}}
                  </div>
                  @endif
                  @if(session()->has('successmessage'))
                  <div class="alert alert-fill-success" role="alert">
                    {{session()->get('successmessage')}}
                  </div>
                  @endif
                  <div class="mb-3">
                    <label for="userEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="userEmail" placeholder="Email" value="{{old('email',session('remember_email',''))}}">
                  </div>
                  <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="userPassword" autocomplete="current-password" placeholder="Password" value="{{old('password',session('remember_password',''))}}">
                  </div>
                  <!-- <div class="form-check mb-3">
                    <input type="checkbox" name="remember" class="form-check-input" value="1" id="authCheck">
                    <label class="form-check-label" for="authCheck">
                      Remember me
                    </label>
                  </div> -->
                  <div>
                    <button id="loginBtn" type="button" class="btn btn-primary me-2 mb-2 mb-md-0 w-100 text-white">Secure Login</button>

                  </div>
                </form>

              </div>
            </div>
            <p class="p-2 text-center text-light text-opacity-50 fs-6 py-3" style="font-size:0.8rem !important;">© Copyright 2022. Rebound Plastic Exchange</p>
            <p class="text-center text-light text-opacity-50 fs-6" style="font-size:0.6rem !important;">Powered by MACS-G</p>

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- core:js -->
  <script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
  <script src="{{asset('admin_assets/js/template.js')}}"></script>
  <!-- endinject -->
  <script src="{{asset('js/login.js') }}"></script>
  <script>
    
    $(function(){

      $(".alert").delay(4000).slideUp(200, function() {
        $(this).alert('close');
      });

      $(":input").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#loginBtn").click();
        }
      });

      $('#loginBtn').click(function(){
        $('#preloader').show();
        login_error=1;
        email =$('#userEmail').val();
        password =$('#userPassword').val();

        if(email==='')
        {
            $('#userEmail').addClass('border');
            login_error=0;
          }
          else {
            $('#userEmail').removeClass('border');
          }

          if(password==='')
          {
            $('#userPassword').addClass('border');
            login_error=0;
          }
          else {
            $('#userPassword').removeClass('border');
          }

          if(login_error==1)
          {
              $('#loginErrorDiv').hide();

              $('#loginForm').submit();
          }
          else
          {   $('#preloader').hide();
              $('#loginErrorDiv').show();
          }

      });

    });

  </script>
</body>

</html>
