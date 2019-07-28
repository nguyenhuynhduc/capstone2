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

use Illuminate\Support\Facades\Route;

Route::get('','User\home@getHome')->name('home');

Route::get('danh-sach-bai-do','User\park@getPark')->name('selectPark');


Route::get('dang-nhap','User\login@getLogin')->name('getLogin');
Route::post('dang-nhap','User\login@postLogin')->name('postLogin');


Route::get('dang-ky','User\register@getRegister')->name('getRegister');
Route::post('dang-ky','User\register@postRegister')->name('postRegister');


Route::get('dang-ky-dai-han','User\bookLong@getBookLong')->name('getBookLong');

Route::get('dang-nhap','User\login@getLogin')->name('getLogin');


Route::get('tai-khoan','User\account@getAccount')->name('account');
Route::get('thong-tin','User\account@getEditAccount')->name('getEditAccount');
Route::post('thong-tin','User\account@postEditAccount')->name('postEditAccount');


