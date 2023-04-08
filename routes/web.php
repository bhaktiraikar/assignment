<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
  return view('admin.login');
})->name('login');

Route::post('/admin_login', [LoginController::class, 'adminLogin'])->name('adminLogin');

Route::group(['middleware' => 'auth:admin'], function () {

    Route::group(['prefix' => 'admin'], function () {
  
      Route::get('dashboard', [HomeController::class, 'getDashboard'])->name('adminHome');
      Route::get('get_application', [HomeController::class, 'getApplicationPage'])->name('getApplicationPage');
      Route::post('admin/applicant_validation', [HomeController::class, 'applicantValidation']);
      Route::post('add_applicant', [HomeController::class, 'addApplicant'])->name('addApplicant');
      Route::get('applicant_list', [HomeController::class, 'getapplicantList'])->name('getapplicantList');

    });
  Route::get('admin_logout', [LoginController::class, 'adminLogout'])->name('adminLogout');
});

