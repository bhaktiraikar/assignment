<div class="modal fade bd-example-modal-lg" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Preview Form</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                

                                    <div class=" mb-4">
                                        <label for="applicantName" class="form-label"><strong>Name<small class="text-danger"> * </small></strong></label>
                                        <input type="text" class="form-control" id="name_preview" 
                                            placeholder="Enter Name" >
                                    </div>
                                    <div class=" mb-4">
                                        <label for="phone" class="form-label"><strong>Phone<small class="text-danger"> * </small></strong></label>
                                        <input type="text" class="form-control" id="phone_preview"
                                            placeholder="Enter Phone" >
                                    </div>
                                    <div class=" mb-4">
                                        <label for="dob" class="form-label"><strong>DOB<small class="text-danger"> * </small></strong></label>
                                        <input type="date" class="form-control" id="dob_preview" >
                                    </div>
                                    <div>
                                        <label class="form-label"><strong>Address<small class="text-danger"> * </small></strong></label>
                                        <input type="text" class="form-control mb-2" id="address_preview" 
                                            placeholder="Enter Address">
                                    </div>
                                    <div class="col-auto mb-2">
                                        <input class="form-control"  id="state_preview">
                                    </div>
                                    <div class="col-4">
                                        <input class="form-control"  id="city_preview">
                                    </div>
                                    <div class="mb-4">
                                        <input class="form-control " type="text" id="profile_photo_preview">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control mb-3" id="doc_name1_preview" 
                                            value="Self Proof Document" readonly />
                                        <input class="form-control kybDoc" type="text" id="doc_file1_preview"
                                            name="doc_file1" accept=".pdf">
                                        </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control mb-3" id="doc_name2_preview" 
                                            value="Certification DOc" readonly />
                                        <input class="form-control kybDoc" type="text" id="doc_file2_preview">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control mb-3" id="doc_name2_preview" 
                                            value="Income Proof" readonly />
                                        <input class="form-control kybDoc" type="text" id="doc_file3_preview">
                                    </div>
                                    <div class=" mb-2">
                                        <label for="loan_amount" class="form-label"><strong>Loan amount</strong></label>
                                        <input type="number" class="form-control" id="loan_amount_preview" 
                                            placeholder="Enter Loan amount" >

                                    </div>
                                    <div class=" mb-2">
                                        <label class="form-label"><strong>Tenure</strong></label>
                                        <input type="number" class="form-control" id="tenure_preview" 
                                            placeholder="Enter Loan amount" >
                                    </div>
                                    <div class=" mb-2">
                                        <label class="form-label"><strong>Income Details</strong></label>
                                        <textarea class="form-control" id="income_details_preview" 
                                            placeholder="Enter Income Details" ></textarea>
                                    </div>
                                    <button type="button" name="submitPreviewBtn" id="submitPreviewBtn" class="btn btn-primary me-2">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>