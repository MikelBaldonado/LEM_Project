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

Route::get('/', 'App\Http\Controllers\PageController@index');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/contact', 'App\Http\Controllers\PageController@contact');
Route::get('/pricing', 'App\Http\Controllers\PageController@pricing');



Route::resource('properties', 'App\Http\Controllers\PropertiesController');
// Route::resource('propertiesShow', 'App\Http\Controllers\PropertiesController');
Route::resource('owner', 'App\Http\Controllers\OwnerController');
Route::resource('agents', 'App\Http\Controllers\AgentController');
Route::resource('province', 'App\Http\Controllers\ProvinceController');
Route::resource('citymun', 'App\Http\Controllers\CityMunController');

Route::get('propertiesShow', [App\Http\Controllers\PropertiesController::class,'index'])->name('propertiesShow.index');
Route::get('admin/properties', [App\Http\Controllers\PropertiesController::class,'showAdminIndex'])->name('properties.index');
Route::get('searchproperties', [App\Http\Controllers\PropertiesController::class,'search'])->name('properties.search');
Route::get('filterproperties', [App\Http\Controllers\PropertiesController::class,'filter'])->name('properties.filter');



// For Email
Route::post('sendMail','App\Http\Controllers\MailController@sendMail');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
