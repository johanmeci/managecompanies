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

/* Route::get('/', 'HomeController@index')->name('home'); */
/* Route::get('/home', 'HomeController@index')->name('home'); */
Route::get('/', function(){
    return (view('auth.login'));
});
Route::get('/home', 'EmployeesController@index')->name('home');

Route::resource('companies', 'CompaniesController')->middleware('auth');
Route::resource('employees', 'EmployeesController')->middleware('auth');

//Remove register and reset options
Auth::routes(['register' => false, 'reset' => false]);

//Localization
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});