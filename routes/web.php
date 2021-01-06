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
Auth::routes();
Route::get('/', function () {
    //dd('bkhdhck');
    return view('Auth.login');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', function(){
        if(Auth::user()->is_admin == "super_admin"){
            //dd(Auth::user());
            return view('superadmin');
        }elseif(Auth::user()->is_admin == "admin"){
            //dd(Auth::user());
            return view('admin');
        }else{
            //dd(Auth::user());
            return view('home');
        }
    });
});

//Route::get('/superadmin/all','SuperadminController@view');
Route::resource('superadmin', 'SuperadminController');

//Route::get('/admin/all','AdminsController@view');
Route::resource('admin', 'AdminsController');

Route::resource('student', 'StudentController');
Route::get('/filter', 'StudentController@filter');

Route::resource('result', 'ResultController');
Route::get('/search', 'ResultController@search');
Route::get('/result/{id}', 'ResultController@getPdf');

Route::get('/register_admin', 'NewAdminController@create')->name('register_admin');
Route::post('/store', 'NewAdminController@admin_store')->name('admin_store');

//Route::get('/register_student', 'StudentRegController@create')->name('register_student');
//Route::post('/store', 'StudentRegController@student_store')->name('student_store');


