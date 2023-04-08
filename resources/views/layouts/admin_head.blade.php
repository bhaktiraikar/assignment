
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv='cache-control' content='no-cache'>
<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Mandatory Documents Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->
	<link href="{{asset('assets/dist/fontawesome/css/all.css')}}" rel="stylesheet">

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/select2/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/jquery-tags-input/jquery.tagsinput.min.css')}}">
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet"/>

	<script src="https://use.fontawesome.com/3de905af2e.js"></script>
	<!-- endinject -->

  <!-- Layout styles -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/theme/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- Datatable links -->
  <link  href="https://www.nobleui.com/html/template/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css" rel="stylesheet">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- change date format in js -->
  <script src="https://momentjs.com/downloads/moment.min.js"></script>
  <link href="{{asset('admin_assets/css/buttons.dataTables.min.css')}}" rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/datepicker.css')}}" />

@yield('head')
	<style>
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
.fa-stack[data-count]:after{
  position:absolute;
  right:0%;
  top:1%;
  content: attr(data-count);
  font-size:30%;
  padding:.6em;
  border-radius:999px;
  line-height:.75em;
  color: white;
  background:rgba(255,0,0,.85);
  text-align:center;
  min-width:2em;
  font-weight:bold;
}
.fa-stack-1x, .fa-stack-2x {
  left:1;
  width:120%;
}
	</style>
</head>
