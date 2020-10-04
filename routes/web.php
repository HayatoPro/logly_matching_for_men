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
// Googleリスティング
// 獲得用
Route::get('game', function () {
    return view('google.check'); //仮LP
    // return redirect('https://a-trade.jp/redirect/nijikano?media=G16531'); //獲得LP
});

// LP確認用
Route::get('cccheck2', function () {
    return redirect('https://a-trade.jp/redirect/nijikano?media=G16531'); //獲得LP
});


// LOGLY
// 獲得用
Route::get('matching', function () {
    // return view('logly.omiai');
    return view('logly.adult');
    
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
    // return view('logly.matching'); //Tapple_LP参考
    // return view('google.matching2'); //Tapple_LP参考
    // return view('logly.noMatch'); //アダルト訴求 
});

// Omiai_DL
Route::get('dl', function () {
    return view('logly.dl');
});

// 運営者情報
Route::get('organize', function () {
    return view('logly.organize');
});

// LP確認用
Route::get('cccheck', function () {
    return view('logly.adult');
    
    // return view('logly.omiai');
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
    // return view('logly.matching'); //Tapple_LP
    // return view('logly.noMatch'); //アダルト訴求
});