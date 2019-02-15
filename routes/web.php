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

// Khong duoc xoa
Auth::routes();


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Backend'], function() {
//    User
    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::post('/users', 'UserController@store')->name('user.store');
    Route::get('/users/{id}', 'UserController@show')->where('id','[0-9]+')->name('user.show');
    Route::put('/users/{id}', 'UserController@update')->name('user.update');
    Route::delete('/users/{id}', 'UserController@delete')->name('user.delete');

//    Category
    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/categories/create', 'CategoryController@create')->name('category.create');
    Route::post('/categories', 'CategoryController@store')->name('category.store');
    Route::get('/categories/{id}', 'CategoryController@show')->where('id','[0-9]+')->name('category.show');
    Route::put('/categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/categories/{id}', 'CategoryController@delete')->name('category.delete');

//    Product
    Route::get('/products', 'ProductController@index')->name('product.index');
    Route::get('/products/create', 'ProductController@create')->name('product.create');
    Route::post('/products', 'ProductController@store')->name('product.store');
    Route::get('/products/{id}', 'ProductController@show')->where('id','[0-9]+')->name('product.show');
    Route::put('/products/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/products/{id}', 'ProductController@delete')->name('product.delete');
    Route::patch('/products/{id}', 'ProductController@setFeaturedProduct')->name('product.setFeaturedProduct');

//    Order
    Route::get('/orders', 'OrderController@index')->name('order.index');
    Route::get('/orders/{id}', 'OrderController@show')->where('id','[0-9]+')->name('order.show');
    Route::delete('/orders/{id}', 'OrderController@delete')->name('order.delete');
});

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function() {
//    User
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/products/{slug}-{id}.html', 'HomeController@show')->name('home.show')
        ->where([
            'slug' => '[a-z-]+',
            'id' => '[0-9]+'
        ]);
    Route::post('/products/{slug}-{id}.html', 'HomeController@comment')->name('home.comment')
        ->where([
            'slug' => '[a-z-]+',
            'id' => '[0-9]+'
        ]);
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::post('/cart', 'CartController@updateCart')->name('cart.updateCart');
    Route::get('/cart/{id}/delete', 'CartController@deleteCart')->name('cart.deleteCart');
    Route::get('/cart/deleteAll', 'CartController@deleteAll')->name('cart.deleteAll');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@placeOrder')->name('checkout.placeOrder');
    Route::get('/thankyou', 'CheckoutController@thankyou')->name('checkout.thankyou');

});

Route::group(['as' => 'api.', 'prefix' => 'api', 'namespace' => 'Frontend'], function() {
//    Cart
    Route::get('/cart', 'CartController@getCart')->name('cart.getCart');
    Route::post('/cart', 'CartController@addToCart')->name('cart.addToCart');

});


//Route::get('/users/{id}/abc/{name}', 'UserController@show')->where([
//    'id' => '[0-9]+',
//    'name' => '[a-zA-Z]+'
//]);