<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes(['verify' => true]);
Route::get('/login2', 'HomeController@login')->name('login2');
Route::get('change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('change-password', 'Auth\ChangePasswordController@changepassword')->name('password.update');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(
    function (){
        Route::resource('/users', 'UsersController', ['except'=>['show', 'create', 'store']]);
    }
);

Route::namespace('Author')->prefix('author')->name('author.')->group(
    function (){
        Route::resource('/products', 'ProductsController');
    }
);

Route::group(['prefix' => 'page', 'as' => 'page.'], function(){
   Route::get('/dostavka', 'PageController@dostavka')->name('dostavka');
   Route::get('/about', 'PageController@about')->name('about');
   Route::get('/checkout', 'PageController@checkout')->name('checkout_page');
   Route::get('/faq', 'PageController@faq')->name('faq');
   Route::get('/stocks', 'PageController@stocks')->name('stocks');
   Route::get('/view/{product}', 'PageController@show')->name('shop.show');

});

Route::group(['prefix' => 'catalog', 'as' => 'catalog.'], function() {
    Route::group(['prefix' => 'healthy eating', 'as' => 'healthy-eating.'], function () {
        Route::get('/healthy-drink', 'CatalogController@healthy_drink')->name('healthy-drink');
        Route::get('/flour', 'CatalogController@flour')->name('flour');
    });
    Route::get('/search', 'CartController@search')->name('search');
    });

Route::group(['prefix' => 'cart'], function (){
    Route::get('/cart', 'CartController@cart')->name('cart.index');
    Route::post('/add', 'CartController@add')->name('cart.store');
    Route::post('/update', 'CartController@update')->name('cart.update');
    Route::post('/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/clear', 'CartController@clear')->name('cart.clear');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
});

Route::group(['prefix' => 'post'], function (){
    Route::post('/comment/store', 'Post\CommentController@store')->name('comment.add');
    Route::get('/comment/show', 'Post\CommentController@show')->name('comments.show');
});
