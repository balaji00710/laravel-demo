<?php

use App\Jobs\SendEmailJob;
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
    return view('home');
});

Route::get("/testmail", function () {
    $details['email'] = 'balaji00710@gmail.com';
    dispatch(new SendEmailJob($details));
    dd('done');
});
