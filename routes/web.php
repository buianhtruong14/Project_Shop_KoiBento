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

Route::get('/', function () {
    return view('welcome');
});
Route::get('trang_chu',function(){
    return view('page.trang_chu');
});
Route::get('dau_bep',function(){
    return view('page.dau_bep');
});
Route::get('tin_tuc',function(){
    return view('page.tin_tuc');
});
Route::get('tin_tuc1',function(){
    return view('page.tin_tuc1');
});
Route::get('tin_tuc2',function(){
    return view('page.tin_tuc2');
});
Route::get('tin_tuc3',function(){
    return view('page.tin_tuc3');
});
Route::get('show',function(){
    return view('page.show');
});
Route::get('big_bento',function(){
    return view('page.big_bento');
});
Route::get('mini_bento',function(){
    return view('page.mini_bento');
});
Route::get('sushi',function(){
    return view('page.sushi');
});
Route::get('lien_he',function(){
    return view('page.lien_he');
});
Route::get('ve_koi',function(){
    return view('page.ve_koi');
});
Route::get('dau_bep1',function(){
    return view('page.dau_bep1');
});
Route::get('dau_bep2',function(){
    return view('page.dau_bep2');
});
Route::get('dau_bep3',function(){
    return view('page.dau_bep3');
});
Route::get('combo',function(){
    return view('page.combo');
});
Route::get('dat_hang',function(){
    return view('page.dat_hang');
});
Route::get('cart',function(){
    return view('page.cart');
});
Route::get('admin',function(){
    return view('page.admin');
});
Route::resource('produc', 'ProductController');
Route::get('bigbento', 'ProductController@bento');
Route::get('ApiMinibento', 'ProductController@ApiMinibento');
Route::get('ApiSushi', 'ProductController@ApiSushi');

