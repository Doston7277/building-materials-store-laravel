<?php

Route::get('/', 'LightenController@index');

Route::get('about', 'LightenController@about');
Route::get('contact', 'LightenController@contact');

Route::post('product_insert', 'ProductController@insert');
Route::get('product', 'ProductController@product');

Route::get('blog', 'BlogController@blog');
Route::post('insert', 'BlogController@insert');

Route::get('admin_product', 'AdminController@product');
Route::get('admin_blog', 'AdminController@blog');
Route::get('admin', 'AdminController@admin');

Route::post('/sendEmail', 'EmailController@sendEmail');

Auth::routes();

Route::get('/home', 'LightenController@index');
