<footer class="footer border-top">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="#" target="_blank">Rebound Plastic Exchange</a>.</p>
    <p class="text-muted mb-1">Powered By <a href="#" target="_blank">MACS-G</a>.</p>
    <p class="text-muted"> All Times Indicated are in UTC | <a href="mailto:support@macs-g.com"><i class="mb-1 text-primary ms-1 icon-sm" data-feather="mail"></i> Contact Support </a></p>
  </div>
</footer>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>

<script src="{{asset('admin_assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin_assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin_assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin_assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin_assets/js/template.js')}}"></script>
<!-- endinject -->
<script src="{{asset('admin_assets/vendors/select2/select2.min.js')}}"></script>

<!-- Custom js for this page -->
<script src="{{asset('admin_assets/js/dashboard-light.js')}}"></script>
<script src="{{asset('admin_assets/js/select2.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- End custom js for this page -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- datatable -->
<script src="{{asset('admin_assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin_assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
<!-- <script src="{{asset('admin_assets/js/data-table.js')}}"></script> -->

<script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/@popperjs/core@2"></script>

<script>
  $(function() {
    $('#preloader').show().delay(1000).fadeOut();
  });
</script>
@yield('script')

</body>

</html>