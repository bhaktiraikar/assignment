<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\ApplicantDetail;
use App\Models\KycDocument;
use App\Models\LoanDocument;

use Illuminate\Http\Request;
use File;
use DataTables;
use DB;
class HomeController extends Controller
{
    //
    function getDashboard(Request $request)
  {
    return view('admin.dashboard');
  }
  public function getApplicationPage(Request $request)
  {
    return view('admin.add_applicant');
  }
  public function applicantValidation(Request $request)
  {
    $validate = Validator::make($request->all(), [
          'name'        =>  'required',
          'phone'             =>  'required',
          'dob'         =>  'required',
          'address'             =>  'required',
          'city'    =>  'required',
          'state'           =>  'required',
          'profile_photo' => 'required'
    ],
    [
    'name.required' => 'Name is required',
    'phone.required' => 'Phone number is required',
    'dob.required' => 'DOB is required',
    'address.required' => 'Address is required',
    'city.required' => 'City is required',
    'state.required' => 'State is required',
    'profile_photo.required' =>  'Profile image is required',

    ]
    );
    if($validate->fails()){
      return response()->json(['validation_error' => true, 'validation_error_data' => $validate->errors()]);
    }
    else
    {
      return response()->json(['validation_error' => false]);
    }
  }
  public function addApplicant(Request $request)
  {
    // dd($request->all());
    try {
      DB::beginTransaction();
      $folder_name = '/Documents/profile_photo/';
      $path = storage_path($folder_name);
      File::makeDirectory($path, $mode = 0777, true, true);
      $doc_file = $request->file('profile_photo');
      $docName = date('his') . $doc_file->getClientOriginalName();
      $doc_file->move($path, $docName);

      $applicant = new ApplicantDetail;
      $applicant->name = $request->name;
      $applicant->phone = $request->phone;
      $applicant->dob = $request->dob;
      $applicant->address = $request->address;
      $applicant->state = $request->state;
      $applicant->city = $request->city;
      $applicant->profile_photo = $docName;
      $applicant->save();

      $doc1 = file_get_contents($request->doc_file1);
      //encrypt
      $cipher = "aes-128-cbc";
      $ivlen = openssl_cipher_iv_length($cipher);
      $iv = openssl_random_pseudo_bytes($ivlen);
      $key = openssl_random_pseudo_bytes(128);
      $ciphertext1 = openssl_encrypt($doc1, $cipher, $key, $options=0, $iv);
      $kyc_doc  = new KycDocument;
      $kyc_doc->applicant_id = $applicant->id;
      $kyc_doc->document_type = 'Self Proof Document';
      $kyc_doc->document = addslashes($ciphertext1);
      $kyc_doc->save();
      if ($request->hasFile('doc_file2')) {
        $doc2 = file_get_contents($request->doc_file2);
        
        $ciphertext2 = openssl_encrypt($doc2, $cipher, $key, $options=0, $iv);
        $kyc_doc  = new KycDocument;
        $kyc_doc->applicant_id = $applicant->id;
        $kyc_doc->document_type = 'Certification Document';
        $kyc_doc->document = addslashes($ciphertext2);
        $kyc_doc->save();
      }
      if ($request->hasFile('doc_file3')) {
        $doc3 = file_get_contents($request->doc_file3);
        
        $ciphertext3 = openssl_encrypt($doc3, $cipher, $key, $options=0, $iv);
        $kyc_doc  = new KycDocument;
        $kyc_doc->applicant_id = $applicant->id;
        $kyc_doc->document_type = 'Certification Document';
        $kyc_doc->document = addslashes($ciphertext3);
        $kyc_doc->save();
      }
      $loan_details = new LoanDocument;
      $loan_details->applicant_id = $applicant->id;
      $loan_details->loan_amount = $request->loan_amount;
      $loan_details->tenure = $request->tenure;
      $loan_details->income_details = $request->income_details;
      $loan_details->save();
      DB::commit();
      return redirect()->back()->with('message', 'Applicant Details added successfully');

    } catch (\Exception $e) {
      //throw $th;
      DB::rollback();
      throw $e;

    }
    
  }
  public function getapplicantList(Request $request)
  {
    $applicants = ApplicantDetail::with(['kyc_documents', 'loan_documents'])->get();
    // dd($applicants);
    return Datatables::of($applicants)
  
    ->make(true);
  }
}
