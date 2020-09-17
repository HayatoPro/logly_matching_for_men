<?php

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
// 獲得用
Route::get('matching', function () {
    return view('logly.omiai');
});

// Omiai_DL
Route::get('dl', function () {
    return view('logly.dl');
});

// 運営者情報
Route::get('organize', function () {
    return view('logly.organize');
});