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

//Route::get('/', function () {
//
//    $data = [];
//    $data['id'] = 22;
//    $data['name'] = 'thaer';
//    return view('welcome', $data);
////    return view('welcome') -> with(['data' => 'thaer', 'age' => 22]);
//});
//Route::resource('news', 'NewsController')->with('data', 2);

//Route::get('index', 'front\UserController@getindex');
//Route::get('/landing', function () {
//    return view('landing');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});
//
//Route::get('/test/{id?}', function () {
//    return ('okat');
//})->name('test');;
//
//Route::get('/number/{id}', function ($id){
//    return($id);
//})->name('number');
//
//// Route::namespace('Front')->group(function() {
////     Route::get('users','userController@showAdminName');
//// });
//
//Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
//	Route::get('/', function() {
//		return 'works';
//	});
//	Route::get('show', 'front\UserController@showAdminName')->name('show');
//});

//Route::get('/login', function () {
//    return 'login please';
//})->name('login');
//
//Route::group(['namespace' => 'front','prefix' => 'front'], function () {
//    Route::get('/', function() {
//        return 'works';
//    });
//    Route::get('second','Second@showText')->name('first');
//    Route::get('third','Second@showText1')->name('third');
//});
//Route::group(['namespace' => 'front'], function () {
//    Route::get('/', function() {
//        return 'works';
//    });
//    Route::get('second','Second@showText')->name('first');
//
//});
//Route::get('second','front\Second@showText')->name('first');

// Route::get('check', function() {
// 	return 'middlware';
// }) -> middleware('auth');

// Route::prefix('users')->group(function() {
//     Route::get('show','front\userController@showAdminName');
// });



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');
