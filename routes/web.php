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



Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('owner/home', 'HomeController@ownerHome')->name('owner.home')->middleware('is_admin');
Route::get('tenant/home', 'HomeController@tenantHome')->name('tenant.home')->middleware('is_admin');
Route::get('employee/home', 'HomeController@employeeHome')->name('employee.home')->middleware('is_admin');
