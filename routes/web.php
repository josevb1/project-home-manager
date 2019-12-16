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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/network', 'IndexController@index')->name('network');
Route::get('/friends', 'IndexController@friends')->name('friends');
Route::get('/addfriend/{id}', 'IndexController@sendRequest' );


Route::resource('/groups', 'GroupController');

// Route::get('/groups{slug}', 'GroupController@show');


Route::get('/admin', function() {
    return 'admin';
})->middleware(['auth','admin']);

Route::namespace('admin')->prefix('admin')->middleware(['auth','admin'])->name('admin.')->group(function () {
    Route::resource('/users','UserController',['except' => ['show','create','store']]);
 
});

