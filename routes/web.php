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

// Categoria dependencia injeccion
Route::bind('categoria', function ($categoria) {
        return App\User::where('nombre', $categoria)->first() ?? abort(404);
        });
// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
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


Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);


// Authentication routes...
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// PAYPAL

// Enviamos nuestro pedido a paypal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',	
));

// Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));



// Admin -------------------

Route::get('admin/home', function(){
	return view('admin.home');
});

Route::resource('admin/categoria', 'Admin\CategoriaController');

Route::resource('admin/producto', 'Admin\ProductoController');


