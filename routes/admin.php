<?php
Route::get('admin-login','Admin\LoginController@AdminLogin')->name('admin.login.get');
Route::post('admin-login','Admin\LoginController@login')->name('admin.login');

Route::get('admin-forgot-password','Admin\ForgotPasswordController@adminLinkRequestForm')->name('admin.forgot.password');
Route::post('admin-forgot-mail','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password-reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password-update','Admin\ResetPasswordController@reset')->name('admin.password.update');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::post('admin-logout','AdminController@logout')->name('admin.logout');
    Route::get('admin-register','AdminController@register')->name('register');
    Route::post('admin-register','AdminController@admin_register')->name('admin.register');
   //store blogpost

    Route::post('store-blogpost','Admin\Blogpost\BlogpostController@store_blogpost')->name('store.blogpost');
     //update blogpost
    Route::post('update/blogpost/{id}','Admin\Blogpost\BlogpostController@update_blogpost');
});
//brand

Route::get('add-brand','Admin\Brand\BrandController@brand')->name('brand');
Route::get('brand-list','Admin\Brand\BrandController@brand_list')->name('brand_list');
Route::post('brand-store','Admin\Brand\BrandController@brand_store')->name('store.brand');
Route::get('delete/brand/{id}','Admin\Brand\BrandController@delete_brand');
Route::get('edit/brand/{id}','Admin\Brand\BrandController@edit_brand');
Route::post('update/brand/{id}','Admin\Brand\BrandController@update_brand');

//category
Route::get('category','Admin\Category\CategoryController@category')->name('category');
Route::get('category-list','Admin\Category\CategoryController@category_list')->name('category_list');
Route::post('store-category','Admin\Category\CategoryController@store_category')->name('store.category');
Route::get('delete/category/{id}','Admin\Category\CategoryController@delete_category');
Route::get('edit/category/{id}','Admin\Category\CategoryController@edit_category');
Route::post('update/category/{id}','Admin\Category\CategoryController@update_category');

//product
Route::get('product','Admin\Product\ProductController@product')->name('product');
Route::get('product-list','Admin\Product\ProductController@product_list')->name('product_list');
Route::post('store-product','Admin\Product\ProductController@store_product')->name('store.product');
Route::get('delete/product/{id}','Admin\Product\ProductController@delete_product');
Route::get('edit/product/{id}','Admin\Product\ProductController@edit_product');
Route::post('update/product/{id}','Admin\Product\ProductController@update_product');
//blogpost
Route::get('blogpost','Admin\Blogpost\BlogpostController@blogpost')->name('blogpost');
Route::get('blogpost-list','Admin\Blogpost\BlogpostController@blogpost_list')->name('blogpost_list');
Route::get('delete/blogpost/{id}','Admin\Blogpost\BlogpostController@delete_blogpost');
Route::get('edit/blogpost/{id}','Admin\Blogpost\BlogpostController@edit_blogpost');

//order list

Route::get('order-list','Admin\Order\OrderController@Order_list')->name('order_list');

//order details list
Route::get('order-status/{id}','Admin\Order\OrderController@order_status_edit');
Route::post('update/order-status/{id}','Admin\Order\OrderController@order_status_update');

Route::get('order-details-list','Admin\Order\OrderController@Order_details_list')->name('order_details_list');







