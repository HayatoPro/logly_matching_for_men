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
// 男性向けアダルトライブ獲得用
Route::get('new1', function () {
    // return view('google.check'); //仮LP
    return view('logly.noMatch'); //アダルト訴求
    
    // return redirect('https://a-trade.jp/redirect/tokyolivetalk?media=G16531'); //VideoLiveTalk - Aトレード
});

//OS判定
Route::get('os', 'AdController@os');

// LP確認用
Route::get('cccheck', function () {
    return view('logly.noMatch'); //アダルト訴求
    
    // return view('google.job'); //女性 - 獲得LP
    // return view('logly.matching'); //Tapple_LP
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
    // return view('logly.adult');
    // return view('logly.omiai');
    // return view('google.matching2'); //Tapple_LP参考
});

// appollo提出用
Route::get('matching', function () {
    return view('logly.matching'); //Tapple_LP
    
    // return view('logly.noMatch'); //アダルト訴求
    // return view('google.job'); //女性 - 獲得LP
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
    // return view('logly.adult');
    // return view('logly.omiai');
    // return view('google.matching2'); //Tapple_LP参考
});







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


// ドコモアド
// 獲得用
Route::get('dating', function () {
    return view('logly.omiai');
    // return redirect('https://t.afi-b.com/visit.php?guid=ON&a=R100461-H3470814&p=37183994');
    
    // return view('logly.noMatch'); //アダルト訴求 
    // return view('logly.matching'); //Tapple_LP参考
    // return view('logly.adult');
    // return view('google.matching2'); //Tapple_LP参考
});

// ドコモアド
// チャットレディー獲得用
Route::get('news', function () {
    return view('logly.omiai');
    // return redirect('https://a-trade.jp/redirect/biscor?media=G16531'); //ビスコール
});

// LOGLY
// 獲得用
Route::get('dating', function () {
    return view('logly.omiai');
    // return redirect('https://preaf.jp/pa.do?s=v04031&o=45765&guid=ON'); //トークウィズ - Preaf
});

// Omiai_DL
Route::get('dl', function () {
    return view('logly.dl');
});

// 運営者情報
Route::get('organize', function () {
    return view('logly.organize');
});