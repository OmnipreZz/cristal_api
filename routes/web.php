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
Route::get('/', 'AppController@index');

Route::get('/', 'PublicController@index')->name('public_home');
Route::get('/actualites', 'PublicController@event')->name('public_event');
Route::get('/galerie', 'PublicController@photo')->name('public_photo');
Route::get('/menu', 'PublicController@menu')->name('public_menu');
Route::get('/mention', 'PublicController@mention')->name('public_mention');
Route::get('/contact', 'ContactController@create')->name('public_contact');
Route::post('/contact', 'ContactController@store');


// Route::get('/admin', 'HomeController@index');

// Route::get('/admin', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin_home')->middleware('verified');

Route::resource('events', 'EventController');
Route::resource('menus', 'MenuController');
Route::resource('menucategories', 'MenucategoryController');
Route::resource('photos', 'PhotoController');

Route::Post('/admin/menus/bycategory','MenuController@indexByCat')->name('menu_indexcategory')->middleware('auth');