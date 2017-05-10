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

//Route::get('/', function () {
//    return view('index');
//});


Route::get('/', 'MainController@home');
Route::get('/about', 'AboutController@getAbout');
Route::get('/products', 'ProductController@getProducts');
Route::get('/products/{id}', 'ProductController@getProduct');
Route::get('/inquire_order', 'OrderController@order');
Route::post('/request_order', 'OrderController@requestOrder');
Route::get('/services', 'ServiceController@getServices');
Route::get('/services/{id}', 'ServiceController@showService');
Route::get('/blog', 'BlogController@getBlog');
Route::get('/blog/articles/{id}', 'BlogController@getArticle');


Auth::routes();
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

    Route::post('generator_builder/generate',
        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

    Route::resource('teams', 'TeamController');


    Route::resource('projects', 'ProjectController');

    Route::resource('abouts', 'AboutController');

    Route::resource('products', 'ProductController');

    Route::resource('blogs', 'BlogController');

    Route::resource('contacts', 'ContactController');

    Route::resource('orders', 'OrderController');

    Route::resource('quotes', 'QuoteController');

    Route::resource('services', 'ServiceController');

    Route::resource('sliders', 'SliderController');
});


Route::resource('seos', 'SeoController');