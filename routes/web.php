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

/************************************************************* */
//********************* Admin Routes ***************************/
/************************************************************* */

Route::get('items' , 'ItemController@index')->name('items.index');

Route::get('items/create' , 'ItemController@create')->name('items.create');
Route::post('items/store' , 'ItemController@store')->name('items.store');

Route::get('items/edit/{item}' , 'ItemController@edit')->name('items.edit');
Route::post('items/update/{item}' , 'ItemController@update')->name('items.update');

Route::delete('items/{item}' , 'ItemController@destroy')->name('items.destroy');
