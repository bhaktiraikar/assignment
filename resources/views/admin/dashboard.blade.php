@extends('layouts.admin_layout')


@section('head')
<style>
  /* chart.canvas.parentNode.style.height = '128px';
chart.canvas.parentNode.style.width = '128px'; */
.chart-div {
  height: 486!important;
}
  </style>
@endsection

@section('content')

<!-- Breadcrumbs -->
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Applicants</li>
  </ol>
</nav>

<!-- Title & Toolbar -->
<div class="page-toolbar d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <h4 class="page-title mb-3 mb-md-0">Applicants</h4>


  <div class="page-toolbar-buttons d-flex align-items-center flex-wrap text-nowrap">
      <div class="row" style="float:right;">
        <div class="col-auto">
          <a href="{{ Route('getApplicationPage') }}" class="btn btn-primary btn-icon-text" style="float:right;"> Add Application</a>
        </div>
      </div>
  </div>

</div>




<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">

    <div class="card">


      <div class="card-body">
        <p class="text-muted mb-3">
        </p>

        <div class="table-responsive mb-4">
          <table id="dashboard_table" class="list-table table table-striped table-hover table-md">
            <thead>
              <tr>
                <th scope="col" class="no-border">Name</th>
                <th scope="col" class="no-border">Phone</th>
                <th scope="col" class="no-border">DOB</th>
              </tr>
            </thead>

            <tbody>

              
            </tbody>


          </table>


        </div>
      </div>
    </div>
  </div>

</div>
<!-- #/ container -->


@endsection
@section('script')
<script>
$(function() {
    $('#dashboard_table').dataTable({
      "bDestroy": true
    }).fnDestroy();
    table = $('#dashboard_table').DataTable({
      processing: true,
      serverSide: true,
      "sScrollX": false,
      "sScrollY": false,
      "lengthChange": false,
      pageLength: 5,
      ajax: {
        url: "{{route('getapplicantList')}}"
      },
      columns: [
        {
          data: 'name',
          sClass: 'text-left'
        },
        {
          data: 'phone',
          sClass: 'text-left'
        },
        {
          data: 'dob',
          sClass: 'text-left',
          "searchable": false
        },
        
      ],
      "ordering": true,
      "searching": true,
      
    })
    table.draw();
  })
</script>
@endsection
