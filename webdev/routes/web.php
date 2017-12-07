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

Route::get('/index','frontController@index')->name('index');

Route::get('/search','frontController@search')->name('search');
//Route::get('/search/{searchkey}','frontController@search')->name('search');

Route::get('/index/shirts','frontController@shirts')->name('shirts');
Route::get('/category/{id}','frontController@categoryshow')->name('category.show');

Route::get('/category/products/{id}','frontController@shirt')->name('shirt');
//Route::get('/index','frontController@wallpaper')->name('wallpaper');

Auth::routes();





Route::get('/logout','Auth\LoginController@logout')->name('admin.logout');
Route::get('/client/logout','ClientController@logoutclient')->name('client.logout');
/* admin products*/

Route::get('/admin/products','ProductsController@create')->name('products.register');
Route::get('/admin/category','categoryController@index')->name('products.category');
Route::get('/admin/category/edit/{id}','categoryController@edit')->name('category.edit');
Route::post('/admin/category/update/{id}','categoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}','categoryController@destroy')->name('category.destroy');

Route::post('/admin/category/store','categoryController@store')->name('category.store');
Route::get('/admin/orders','orderController@index')->name('products.orders');
Route::get('/admin/orders/orderby','orderController@indexby')->name('orders.by');
Route::post('/admin/products/store','ProductsController@store')->name('products.store');
Route::get('/admin/productslist','ProductsController@show')->name('product.list');
Route::get('/admin/productslist/edit/{id}','ProductsController@edit')->name('products.edit');
Route::post('/admin/productslist/update/{id}','ProductsController@update')->name('products.update');
Route::get('/admin/productslist/delete/{id}','ProductsController@destroy')->name('products.destroy');

/*cart */


Route::resource('/cart','CartController');
//Route::post('/cart/{id}','frontController@edit')->name('cart.add');


/* end cart*/

/*shipping*/
Route::get('/checkout','checkoutController@index')->name('checkout.index');
Route::post('/shipping','checkoutCrudController@store')->name('shipping.store');
/*end shipping*/

Route::get('/admin','HomeController@admin')->name('admin.index');
/*client auth */

Route::get('/index/login','ClientController@login')->name('client.login');
Route::get('/index/register','ClientController@register')->name('client.register');
Route::post('/index/register/store','ClientController@store')->name('client.store');
Route::post('/index/login','ClientController@loginclient')->name('client.loginclient');

/* facebook socialite */
Route::get('login/facebook', 'ClientController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'ClientController@handleProviderCallback');


/*content*/
Route::get('admin/content', 'ContentController@index')->name('content.index');
Route::post('admin/content', 'ContentController@store')->name('content.post');
Route::get('admin/content/{id}', 'ContentController@destroy')->name('content.destroy');

Route::get('index/content', 'frontController@content')->name('index.content');