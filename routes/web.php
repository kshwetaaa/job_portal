<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('frontend.landing');
// });

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landing.index');
Route::get('/application/create/{id}', [App\Http\Controllers\LandingController::class, 'create'])->name('create.application');


Auth::routes();

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('job', App\Http\Controllers\JobController::class);
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('admin.store');
    Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth',)->group(function(){

    Route::resource('application', App\Http\Controllers\ApplicationController::class);

});

Route::get('generate/{id}', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('download');


Route::get('/sendmail',function(){
    $details = [
      "name" => "test Name",
      "dob" => "test dob",
    ];
  
    Mail::to("hihey0707@gmail.com")->send(new App\Mail\NewMail($details));
    dd('sent successfully');
  });
  