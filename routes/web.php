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

Route::Redirect('/','ChicotekaProducciones');

Auth::routes();

//*******Web

Route::get('ChicotekaProducciones', 'Web\PageController@ChicotekaProducciones')->name('ChicotekaProducciones');

Route::get('chicotecas', 'Web\PageController@chicotecas')->name('chicotecas');

//para post chicotecasenlima
Route::get('chicotecas/{slug}', 		    'Web\PageController@post')->name('post');

//para categorias chicotecasenlima
Route::get('chicotecasenlima/{slug}',		        'Web\PageController@category')->name('category');

//para tags fiestaschicotecas
Route::get('fiestaschicotecas/{slug}', 			'Web\PageController@tag')->name('tag');


//*******Administración


Route::resource('tags',			'Admin\TagController');
Route::resource('categories',	'Admin\CategoryController');
Route::resource('posts',		'Admin\PostController');
