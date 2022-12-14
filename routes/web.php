<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\vetdController;
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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_vet_view',[AdminController::class,'addview']);

Route::post('/upload_vet',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approve/{id}',[AdminController::class,'approve']);

Route::get('/cancel/{id}',[AdminController::class,'cancel']);

Route::get('/showvet',[AdminController::class,'showvet']);

Route::get('/deletevet/{id}',[AdminController::class,'deletevet']);

Route::get('/updatevet/{id}',[AdminController::class,'updatevet']);

Route::post('/editvet/{id}',[AdminController::class,'editvet']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::get('/vet',[VetdController::class,'viewappointment']);

Route::get('/appointments',[VetdController::class,'appointments']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

