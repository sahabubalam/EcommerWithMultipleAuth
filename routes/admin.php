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

    
});
//brand

Route::get('add-brand','Admin\Brand\BrandController@brand')->name('brand');
Route::get('brand-list','Admin\Brand\BrandController@brand_list')->name('brand_list');
Route::post('brand-store','Admin\Brand\BrandController@brand_store')->name('store.brand');
