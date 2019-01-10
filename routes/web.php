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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test', function () {
    return view('test');
})->name("getIndex");

Route::post('/test', function () {
    echo 'POST';
})->name("postIndex");

Route::put('/test', function () {
    echo 'PUT';
})->name("putIndex");

Route::delete('/test', function () {
    echo 'DELETE';
})->name("deleteIndex");

Route::patch('/test', function () {
    echo 'PATCH';
})->name("patchIndex");*/
Route::group(["prefix" => "admin", "as" => "admin."], function(){
    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::post("/users", "UserController@store")->name('user.store');
    Route::get("/users/{id}", "UserController@show")->where('id', '[0-9]+')->name('user.show');
    Route::put("/users/{id}", "UserController@update")->name('user.update');
    Route::delete("/users/{id}", "UserController@delete")->name('user.delete');

    //    Category
    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/categories/create', 'CategoryController@create')->name('category.create');
    Route::post('/categories', 'CategoryController@store')->name('category.store');
    Route::get('/categories/{id}', 'CategoryController@show')->where('id','[0-9]+')->name('category.show');
    Route::put('/categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/categories/{id}', 'CategoryController@delete')->name('category.delete');
});


Route::get('/home', 'HomeController@index')->name('home');
