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

Route::get('frontend/about', 'Frontend\Blogpost\BlogpostController@about')->name('frontend.about');
Route::get('frontend/product', 'Frontend\Blogpost\BlogpostController@product')->name('frontend.product');

Route::get('frontend/blog/details/{id}', 'Frontend\Blogpost\BlogpostController@blog_details');



//admin
Route::prefix('admin')->group(base_path('routes/admin.php'));
