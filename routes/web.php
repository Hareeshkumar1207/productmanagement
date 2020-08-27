<?php

use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout' , 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/admin_home', 'AdminHomeController@index')->name('admin.home');
// 
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/register','Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register','Auth\AdminRegisterController@register')->name('admin.register.submit');
Route::post('/admin/logout' , 'Auth\AdminLoginController@logout')->name('admin.logout');
// 
Route::resource('product','ProductController');
Route::delete('/product/{product}/disable' , 'ProductController@disable')->name('product.disable');
Route::delete('/product/{product}/enable' , 'ProductController@enable')->name('product.enable');


