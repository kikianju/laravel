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

//Route의 설명
//get,post,put,delete,patch.option 종류가 있습니다. 그 뒤에 원하는 도메인의 url(예/login) 입력하여 도메인을 설정하기
//어떠한 컨트롤을 이용할것인지의 대한 설정 @뒤에는 해당 컨트롤의 안에의 클래스명을 입력한다.
//->name('profile') 이런식으로 표시되어있는건 이 페이지의 대한 라우팅의 이름이다, 뷰에서 이 라우팅을 이용할 경우에 사용합니다.

Route::get('/login', 'App\Http\Controllers\LoginController@login');
//name
Route::post('/top', 'App\Http\Controllers\LoginController@top');
Route::get('/signup', 'App\Http\Controllers\SignupController@showSignup');
Route::post('/signupdone', 'App\Http\Controllers\SignupController@signupdone');
//Route::post('/login/process', 'App\Http\Controllers\LoginController@process')->name('process');

