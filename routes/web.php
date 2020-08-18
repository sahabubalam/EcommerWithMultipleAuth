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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//frontend

Route::get('frontend/blogpost', 'Frontend\Blogpost\BlogpostController@show_blogpost')->name('frontend.blogpost');
Route::get('frontend/single/blogpost', 'Frontend\Blogpost\BlogpostController@single_blogpost')->name('frontend.singleblogpost');

Route::get('frontend/about', 'Frontend\Blogpost\BlogpostController@about')->name('frontend.about');
Route::get('frontend/product', 'Frontend\Blogpost\BlogpostController@product')->name('frontend.product');

Route::get('frontend/blog/details/{id}', 'Frontend\Blogpost\BlogpostController@blog_details');
//category
Route::get('frontend/category', 'Frontend\Category\CategoryController@shop_category')->name('shop.category');

//single category
Route::get('frontend/single-category/{id}', 'Frontend\Category\CategoryController@single_category');

//single product
Route::get('frontend/single_product/{id}', 'Frontend\Product\ProductController@single_product');
//cart product==================
Route::post('frontend/cart/product/{id}', 'Frontend\Cart\CartController@add_cart');
//cart ceack======
Route::get('frontend/cart/check', 'Frontend\Cart\CartController@check');
Route::get('frontend/destroy', 'Frontend\Cart\CartController@destroy');


//show shipping info======
Route::get('frontend/cart/shipping_details', 'Frontend\Cart\CartController@shipping_info')->name('shipping_info');
//save shipping info======
Route::post('frontend/cart/save_shipping_details', 'Frontend\Cart\CartController@save_shipping_info')->name('save.shipping');
//cart list===========
Route::get('frontend/cart/list', 'Frontend\Cart\CartController@cart_list')->name('cart.list');
//check out payment===========
Route::get('frontend/checkout/payment', 'Frontend\Cart\CartController@checkout_payment');
//check out payment===========
Route::get('frontend/confirm/order', 'Frontend\Cart\CartController@confirm_order')->name('confirm.order');




//admin
Route::prefix('admin')->group(base_path('routes/admin.php'));
