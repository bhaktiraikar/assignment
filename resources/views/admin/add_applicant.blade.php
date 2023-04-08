@extends('layouts.admin_layout')


@section('head')
<style>
  /* chart.canvas.parentNode.style.height = '128px';
chart.canvas.parentNode.style.width = '128px'; */
.chart-div {
  height: 486!important;
}
.border {
    border-color: red !important;
}
  </style>
@endsection

@section('content')

<!-- Breadcrumbs -->
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Create Applicant</li>
  </ol>
</nav>

<!-- Title & Toolbar -->
<div class="page-toolbar d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <h4 class="page-title mb-3 mb-md-0">Create Applicant</h4>

</div>


<form action="{{route('addApplicant')}}" method="POST" enctype="multipart/form-data" id="addApplicant">
@csrf

    <!-- start -->
    <div class="row" id="applicant_details_div" >

        <div class="col-12 col-md-6 mb-4">

            <div class="card data-preview">
                <div class="card-body">
                    <div class=" mb-4">
                        <label for="applicantName" class="form-label"><strong>Name<small class="text-danger"> * </small></strong></label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter Name" >
                        <span class="text-danger error-span" id="error_name" style="display:none"></span>
                    </div>
                    <div class=" mb-4">
                        <label for="phone" class="form-label"><strong>Phone<small class="text-danger"> * </small></strong></label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter Phone" >
                        <span class="text-danger error-span" id="error_phone" style="display:none"></span>
                    </div>
                    <div class=" mb-4">
                        <label for="dob" class="form-label"><strong>DOB<small class="text-danger"> * </small></strong></label>
                        <input type="date" class="form-control" id="dob" name="dob">
                        <span class="text-danger error-span" id="error_dob" style="display:none"></span>
                    </div>
                    <!--  Single Field Input  -->
                    <div>
                        <label class="form-label"><strong>Address<small class="text-danger"> * </small></strong></label>
                        <input type="text" class="form-control mb-2" id="address" name="address"
                            placeholder="Enter Address">
                        <span class="text-danger error-span" id="error_address" style="display:none"></span>
                        
                    </div>
                    <!-- Two Fields Input   -->
                        <div class="col-auto mb-2">
                            <select class="form-select" name="state" id="state">
                                
                            </select>
                            <span class="text-danger error-span" id="error_state" style="display:none"></span>
                        </div>
                        <div class="col-4">
                            <select class="form-select" name="city" id="city">
                                
                            </select>
                            <span class="text-danger error-span" id="error_city" style="display:none"></span>
                        </div>
                    
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">

            <div class="card data-preview">
                <div class="card-body">
                    <h4 class="page-title mb-3 mb-md-0">Upload Profile Image</h4>
                    <br />

                    <div class="row  border-bottom mb-4">
                        <div class="col-md-6 field pb-4">
                            <!-- File Upload Card -->

                            <!-- Two Fields Input -->
                            <div id="errorFile" class="alert alert-danger mt-4" role="alert" style="display:none;">
                            </div>
                            <div class="mb-4">
                                
                                <input class="form-control " type="file" id="profile_photo"
                                    name="profile_photo" accept=".png, .jpg, .jpeg">
                                <span class="text-danger error-span" id="error_profile_photo" style="display:none"></span>   
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary mt-4" id="applicant_info_btn">Save & Next</button> 
        </div>
    </div>
    <div class="row" id="kyc_documents_div" style="display:none">
        <div class="col-12 col-md-6 mb-4">
            <div class="card data-preview">
                <div class="card-body">
                    <h4 class="page-title mb-3 mb-md-0">Upload Documents</h4>
                    <br />

                    <div class="row  border-bottom mb-4">
                        <div class="col-md-12 ">
                            <!-- File Upload Card -->

                            <input type="hidden" id="total_doc" name="total_doc" />
                            <!-- Two Fields Input -->
                            <div id="errorFile" class="alert alert-danger mt-4" role="alert" style="display:none;">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control mb-3" id="doc_name1" name="title1"
                                    value="Self Proof Document" readonly />
                                <input class="form-control kybDoc" type="file" id="doc_file1"
                                    name="doc_file1" accept=".pdf">
                                <span class="text-danger error-span" id="error_doc_file1" style="display:none">Self Proof Document is manadatory</span>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control mb-3" id="doc_name2" name="title1"
                                    value="Certification Document" readonly />
                                <input class="form-control kybDoc" type="file" id="doc_file2"
                                    name="doc_file2" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control mb-3" id="doc_name2" name="title1"
                                    value="Income Proof" readonly />
                                <input class="form-control kybDoc" type="file" id="doc_file3"
                                    name="doc_file2" accept=".png, .jpg, .jpeg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary mt-4" id="kyb_doc_btn">Save & Next</button> 
            <button class="btn btn-primary mt-4" id="back1_btn">back</button> 
        </div>
    </div>
    <div class="row" id="loan_documents_div" style="display:none">

        <div class="col-12 col-md-6 mb-4">

            <div class="card data-preview">
                <div class="card-body">  

                    <div class=" mb-2">
                        <label for="loan_amount" class="form-label"><strong>Loan amount</strong></label>
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount"
                            placeholder="Enter Loan amount" >

                    </div>
                    <div class=" mb-2">
                        <label class="form-label"><strong>Tenure</strong></label>
                        <input type="number" class="form-control" id="tenure" name="tenure"
                            placeholder="Enter Loan amount" >
                    </div>
                    <div class=" mb-2">
                        <label class="form-label"><strong>Income Details</strong></label>
                        <textarea class="form-control" id="income_details" name="income_details"
                            placeholder="Enter Income Details" ></textarea>
                    </div>
                    

                </div>
            </div>
            <a href="#" onclick="preview_form()" data-bs-toggle="modal" data-bs-target="#previewModal" class="btn btn-primary mt-4">Preview</a>
            <button class="btn btn-primary mt-4" id="back2_btn">back</button>
        </div>
    </div>
    <!-- //end -->
</form>    
<!-- #/ container -->

@include('modals.preview_form')
@endsection
@section('script')
<script>
    $( document ).ready(function() {
        let postData ={country: "India"}
        var url = 'https://countriesnow.space/api/v0.1/countries/states';
        axios.post(url,postData).then(function (response) {
            var states = response.data.data.states;
            $('#state').append('<option value="">Select State</option>');
            $.each(states, function(key,value) {
                $('#state').append('<option value="'+value.name+'">'+value.name+'</option>');
            });
        })
    })
    $("#state").on('change', function(e){ 
        e.stopImmediatePropagation();
        console.log($('#state').val());
        let postData ={country: "India", state:$('#state').val()}
        var url = 'https://countriesnow.space/api/v0.1/countries/state/cities';
        axios.post(url,postData).then(function (response) {
            var cities = response.data.data;
            console.log(cities);
            $('#city').append('<option value="">Select City</option>');
            $.each(cities, function(key,value) {
                $('#city').append('<option value="'+value+'">'+value+'</option>');
            });
        })
    });
    $('#applicant_info_btn').click(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        // $('#applicant_info_btn').attr("disabled", "disabled");
        var name = $('#name').val();
        var phone = $('#phone').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var profile_photo = $('#profile_photo')[0].files;
        formData = new FormData();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('dob', dob);
        formData.append('address', address);
        formData.append('state', state);
        formData.append('city', city);
        formData.append('profile_photo', profile_photo);

        axios.post('admin/applicant_validation', formData)
        .then(function(response) {
            // handle success
            // $('#applicant_info_btn').removeAttr("disabled");
            console.log(response.data.data);
            if (response.data.validation_error == true) {
            var data = response.data.validation_error_data;
            $.each(data, function(key, value) {
                $('#error_' + key).show();
                $('#error_' + key).text(value);
                $('#' + key).addClass('border');
            });
            // $("#cke_add_comment").addClass('border');
            } else {
                $('.error-span').removeClass('border');
                $('#kyc_documents_div').show();
                $('#applicant_details_div').hide();
                // $('#applicant_info_btn').removeAttr("disabled");
            }
        })
        .catch(function(error) {
        console.log(error);
        // handle error
        })
    });
    $('#back1_btn').click(function(e) {
        $('#kyc_documents_div').hide();
        $('#applicant_details_div').show();
        return false;
    });
    $('#kyb_doc_btn').click(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        // $('#kyb_doc_btn').attr("disabled", "disabled");
        var doc = $('#doc_file1')[0].files;
        if (doc.length == 0) {
            $('#error_doc_file1').show();
            $('#doc_file1').addClass('border');
        }
        else 
        {
            $('.error-span').removeClass('border');
            $('#kyc_documents_div').hide();
            $('#loan_documents_div').show();
            // $('#kyb_doc_btn').removeAttr("disabled");
        }
    });
    $('#back2_btn').click(function(e) {
        $('#kyc_documents_div').show();
        $('#loan_documents_div').hide();
        return false;
    });
    $('#submitPreviewBtn').click(function(e) {
        $('#addApplicant').submit();
    });
    function preview_form() {
        var name = $('#name').val();
        var phone = $('#phone').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var profile_photo = $('#profile_photo')[0].files;

        $('#name_preview').val(name);
        $('#phone_preview').val(phone);
        $('#dob_preview').val(dob);
        $('#address_preview').val(address);
        $('#state_preview').val(state);
        $('#city_preview').val(city);
        $('#profile_photo_preview').val(profile_photo);

        for (let index = 1; index <= 3; index++) {
            $('#doc_file'+index+'_preview').val($('#doc_file'+index)[0].files);
        }
        $('#loan_amount_preview').val($('#loan_amount').val());
        $('#tenure_preview').val($('#tenure').val());
        $('#income_details_preview').val($('#income_details').val());
    }
</script>
@endsection
