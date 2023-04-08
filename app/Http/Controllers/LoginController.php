<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use Auth;
class LoginController extends Controller
{
    //
    //user login function
  public function adminLogin(Request $request)
  {
    $email=$request->email;
    $password=$request->password;

    $user_data=['email' => $email, 'password' => $password];

    if (Auth::guard('admin')->attempt($user_data,$request->has('remember'))) {
      if($request->has('remember'))
      {
        session(['remember_email' => $email]);
        session(['remember_password' => $password]);

      }

      return redirect()->route('adminHome');
    }
    else {
      return redirect()->back()->withInput()->with('message','Incorrect email or password');
    }

  }
  //user logout function
  public function adminLogout()
  {

    $id = Auth::user()->id;
    Auth::guard('admin')->logout();
    return view('admin.login');
  }

}
