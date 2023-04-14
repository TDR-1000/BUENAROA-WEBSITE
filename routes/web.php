<?php

use App\Http\Controllers\InquiryController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Home
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Email
Route::post('/send-email', [InquiryController::class, 'sendInquiry']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
