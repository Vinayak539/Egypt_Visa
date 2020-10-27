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
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/home/work_visa', function () {
    return view('frontend.work_visa');
});
Route::get('/home/tourist_visa', function () {
    return view('frontend.home');
});
Route::get('/home/transit_visa', function () {
    return view('frontend.transit_visa');
});
Route::get('/home/immigration_visa', function () {
    return view('frontend.immigration_visa');
});
Route::get('/home/family_visa', function () {
    return view('frontend.family_visa');
});
Route::get('/home/student_visa', function () {
    return view('frontend.student_visa');
});