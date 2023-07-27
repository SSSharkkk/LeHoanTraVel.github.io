<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::get('/about-me', 'App\Http\Controllers\HomeController@about_me');
Route::get('/blog', 'App\Http\Controllers\HomeController@blog');

// admin
Route::get('/dashboard', 'App\Http\Controllers\AdminController@index');
Route::get('/login-admin', 'App\Http\Controllers\AdminController@login_admin');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');

//category
Route::get('/add-category', 'App\Http\Controllers\CategoryController@add_category');
Route::post('/save-category', 'App\Http\Controllers\CategoryController@save_category');
Route::post('/update-category/{category_id}', 'App\Http\Controllers\CategoryController@update_category');
Route::get('/all-category', 'App\Http\Controllers\CategoryController@all_category');
Route::get('/edit-category/{category_id}', 'App\Http\Controllers\CategoryController@edit_category');
Route::get('/delete-category/{category_id}', 'App\Http\Controllers\CategoryController@delete_category');
Route::get('/unactive-category-product/{category_id}', 'App\Http\Controllers\CategoryController@unactive_category_product');
Route::get('/active-category-product/{category_id}', 'App\Http\Controllers\CategoryController@active_category_product');
// Type 
Route::get('/add-type', 'App\Http\Controllers\TypeController@add_type');
Route::post('/save-type', 'App\Http\Controllers\TypeController@save_type');
Route::get('/all-type', 'App\Http\Controllers\TypeController@all_type');
Route::get('/unactive-type/{type_id}', 'App\Http\Controllers\TypeController@unactive_type');
Route::get('/active-type/{type_id}', 'App\Http\Controllers\TypeController@active_type');
Route::get('/edit-type/{type_id}', 'App\Http\Controllers\TypeController@edit_type');
Route::post('/update-type/{type_id}', 'App\Http\Controllers\TypeController@update_type');
Route::get('/delete-type/{type_id}', 'App\Http\Controllers\TypeController@delete_type');



// user blog
Route::get('/add-user-blog', 'App\Http\Controllers\UserBlogController@add_user_blog');
Route::post('/save-user-blog', 'App\Http\Controllers\UserBlogController@save_user_blog');
Route::get('/all-user-blog', 'App\Http\Controllers\UserBlogController@all_user_blog');
Route::get('/unactive-user-blog/{user_id}', 'App\Http\Controllers\UserBlogController@unactive_user_blog');
Route::get('/active-user-blog/{user_id}', 'App\Http\Controllers\UserBlogController@active_user_blog');
Route::get('/edit-user-blog/{user_id}', 'App\Http\Controllers\UserBlogController@edit_user_blog');
Route::post('/update-user-blog/{user_id}', 'App\Http\Controllers\UserBlogController@update_user_blog');
Route::get('/delete-user-blog/{user_id}', 'App\Http\Controllers\UserBlogController@delete_user_blog');










// blog

Route::get('/add-blog', 'App\Http\Controllers\BlogController@add_blog');
Route::post('/save-blog', 'App\Http\Controllers\BlogController@save_blog');
Route::get('/all-blog', 'App\Http\Controllers\BlogController@all_blog');
Route::get('/unactive-blog/{blog_id}', 'App\Http\Controllers\BlogController@unactive_blog');
Route::get('/active-blog/{blog_id}', 'App\Http\Controllers\BlogController@active_blog');
Route::get('/edit-blog/{blog_id}', 'App\Http\Controllers\BlogController@edit_blog');
Route::post('/update-blog/{blog_id}', 'App\Http\Controllers\BlogController@update_blog');
Route::get('/delete-blog/{blog_id}', 'App\Http\Controllers\BlogController@delete_blog');
Route::get('/details-blog/{blog_id}', 'App\Http\Controllers\BlogController@details_blog');
Route::get('/chi-tiet-blog/{blog_id}', 'App\Http\Controllers\BlogController@chi_tiet_blog');








// product back end

Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');
Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product');
Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');



// font end welcome 
Route::get('/details-product/{product_id}', 'App\Http\Controllers\ProductController@details_product');


// gallery 
Route::get('/add-gallery/{product_id}', 'App\Http\Controllers\GalleryProduct@add_gallery');
Route::post('/select-gallery', 'App\Http\Controllers\GalleryProduct@select_gallery');
Route::post('/insert-gallery/{pro_id}', 'App\Http\Controllers\GalleryProduct@insert_gallery');
Route::post('/update-gallery-name', 'App\Http\Controllers\GalleryProduct@update_gallery_name');
Route::post('/delete-gallery', 'App\Http\Controllers\GalleryProduct@delete_gallery');

// send mail

Route::get('/send-mail', 'App\Http\Controllers\HomeController@send_mail');
