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
///////////////////////////APP///////////////////////////
Route::get('/', 'AppController@index' );


// Route::get('/admin', 'HomeController@index');

// Route::get('/admin', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin_home')->middleware('verified');

Route::resource('events', 'EventController');
Route::resource('menus', 'MenuController');
Route::resource('menucategories', 'MenucategoryController');

Route::Post('/admin/menus/bycategory','MenuController@indexByCat')->name('menu_indexcategory')->middleware('auth');