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

Route::get('/', function () {

    \Mail::to('abc@gmail.com')->send(new \App\Mail\SendTestMail());
    return view('welcome');
});


Route::get('email-test', function(){
    dispatch(new App\Jobs\SendEmailJobs());

    return view('welcome');
  
    
});
