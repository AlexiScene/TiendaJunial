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

Route::bind('producto', function($slug){
	return App\Producto::where('slug', $slug)->first();
});

Route::get('/', [
 'as' => 'home',
 'uses' => 'StoreController@index'
]);

Route::get('producto/{slug}', [
 'as' => 'producto-detalle',
 'uses' => 'StoreController@show'
]);

// Carrito --------------------
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{producto}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{producto}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{producto}/{cantidad?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


