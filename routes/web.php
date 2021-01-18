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
Auth::routes();


Route::get('/', function () {
    return redirect('fontend_home');
});

Route::get('/admin', function () {
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');

//////////////////////////////////  BACKEND ///////////////////////////////////////////////////////

//////////////////////////////////  HOME BANNER ///////////////////////////////////////////////////////
Route::get('/home_banner', 'IndexController@home_banner')->name('home_banner');
Route::get('/home_banner_data', 'IndexController@home_banner_data')->name('home_banner_data');
Route::get('/insert_home_banner', 'IndexController@insert_home_banner')->name('insert_home_banner');
Route::post('/save_home_banner', 'IndexController@save_home_banner')->name('save_home_banner');
Route::get('/edit_home_banner/{id}', 'IndexController@edit_home_banner')->name('edit_home_banner');
Route::post('/update_home_banner', 'IndexController@update_home_banner')->name('update_home_banner');
Route::post('/delete_home_banner', 'IndexController@delete_home_banner')->name('delete_home_banner');

//////////////////////////////////  PRODUCT CATEGORY ///////////////////////////////////////////////////////
Route::get('/product_category', 'ProductController@product_category')->name('product_category');
Route::get('/product_category_data', 'ProductController@product_category_data')->name('product_category_data');
Route::get('/insert_product_category', 'ProductController@insert_product_category')->name('insert_product_category');
Route::post('/save_product_category', 'ProductController@save_product_category')->name('save_product_category');
Route::get('/edit_product_category/{id}', 'ProductController@edit_product_category')->name('edit_product_category');
Route::post('/update_product_category', 'ProductController@update_product_category')->name('update_product_category');
Route::post('/delete_product_category', 'ProductController@delete_product_category')->name('delete_product_category');

//////////////////////////////////  PRODUCT ///////////////////////////////////////////////////////
Route::get('/product/{id}', 'ProductController@product')->name('product');
Route::get('/product_data', 'ProductController@product_data')->name('product_data');
Route::get('/insert_product/{id}', 'ProductController@insert_product')->name('insert_product');
Route::post('/save_product', 'ProductController@save_product')->name('save_product');
Route::get('/edit_product/{id}', 'ProductController@edit_product')->name('edit_product');
Route::post('/update_product', 'ProductController@update_product')->name('update_product');
Route::post('/delete_product', 'ProductController@delete_product')->name('delete_product');

//////////////////////////////////  PRODUCT IMAGES ///////////////////////////////////////////////////////
Route::get('/product_images/{id}/{delete_id}', 'ProductController@product_images')->name('product_images');
Route::get('/product_images_data', 'ProductController@product_images_data')->name('product_images_data');
Route::get('/insert_product_images/{id}/{delete_id}', 'ProductController@insert_product_images')->name('insert_product_images');
Route::post('/save_product_images', 'ProductController@save_product_images')->name('save_product_images');
Route::get('/edit_product_images/{id}', 'ProductController@edit_product_images')->name('edit_product_images');
Route::post('/update_product_images', 'ProductController@update_product_images')->name('update_product_images');
Route::post('/delete_product_images', 'ProductController@delete_product_images')->name('delete_product_images');

//////////////////////////////////  PRODUCT SUB ///////////////////////////////////////////////////////
Route::get('/product_sub/{id}/{delete_id}', 'ProductController@product_sub')->name('product_sub');
Route::get('/product_sub_data', 'ProductController@product_sub_data')->name('product_sub_data');
Route::get('/insert_product_sub/{id}/{delete_id}', 'ProductController@insert_product_sub')->name('insert_product_sub');
Route::post('/save_product_sub', 'ProductController@save_product_sub')->name('save_product_sub');
Route::get('/edit_product_sub/{id}', 'ProductController@edit_product_sub')->name('edit_product_sub');
Route::post('/update_product_sub', 'ProductController@update_product_sub')->name('update_product_sub');
Route::post('/delete_product_sub', 'ProductController@delete_product_sub')->name('delete_product_sub');

//////////////////////////////////  PRODUCT SUB DETAIL ///////////////////////////////////////////////////////
Route::get('/product_sub_detail/{id}/{product_id}/{delete_id}', 'ProductController@product_sub_detail')->name('product_sub_detail');
Route::get('/product_sub_detail_data', 'ProductController@product_sub_detail_data')->name('product_sub_detail_data');
Route::get('/insert_product_sub_detail/{id}/{product_id}/{delete_id}', 'ProductController@insert_product_sub_detail')->name('insert_product_sub_detail');
Route::post('/save_product_sub_detail', 'ProductController@save_product_sub_detail')->name('save_product_sub_detail');
Route::get('/edit_product_sub_detail/{id}', 'ProductController@edit_product_sub_detail')->name('edit_product_sub_detail');
Route::post('/update_product_sub_detail', 'ProductController@update_product_sub_detail')->name('update_product_sub_detail');
Route::post('/delete_product_sub_detail', 'ProductController@delete_product_sub_detail')->name('delete_product_sub_detail');

//////////////////////////////////  PRODUCT SUB IMAGES ///////////////////////////////////////////////////////
Route::get('/product_sub_images/{id}/{product_sub_id}/{product_id}/{delete_id}', 'ProductController@product_sub_images')->name('product_sub_images');
Route::get('/product_sub_images_data', 'ProductController@product_sub_images_data')->name('product_sub_images_data');
Route::get('/insert_product_sub_images/{id}/{product_sub_id}/{product_id}/{delete_id}', 'ProductController@insert_product_sub_images')->name('insert_product_sub_images');
Route::post('/save_product_sub_images', 'ProductController@save_product_sub_images')->name('save_product_sub_images');
Route::get('/edit_product_sub_images/{id}', 'ProductController@edit_product_sub_images')->name('edit_product_sub_images');
Route::post('/update_product_sub_images', 'ProductController@update_product_sub_images')->name('update_product_sub_images');
Route::post('/delete_product_sub_images', 'ProductController@delete_product_sub_images')->name('delete_product_sub_images');

//////////////////////////////////  NEWS BANNER ///////////////////////////////////////////////////////
Route::get('/news_banner', 'NewsController@news_banner')->name('news_banner');
Route::get('/news_banner_data', 'NewsController@news_banner_data')->name('news_banner_data');
Route::get('/edit_news_banner/{id}', 'NewsController@edit_news_banner')->name('edit_news_banner');
Route::post('/update_news_banner', 'NewsController@update_news_banner')->name('update_news_banner');

//////////////////////////////////  NEWS ///////////////////////////////////////////////////////
Route::get('/news', 'NewsController@news')->name('news');
Route::get('/news_data', 'NewsController@news_data')->name('news_data');
Route::get('/insert_news', 'NewsController@insert_news')->name('insert_news');
Route::post('/save_news', 'NewsController@save_news')->name('save_news');
Route::get('/edit_news/{id}', 'NewsController@edit_news')->name('edit_news');
Route::post('/update_news', 'NewsController@update_news')->name('update_news');
Route::post('/delete_news', 'NewsController@delete_news')->name('delete_news');

//////////////////////////////////  PROMOTIONS ///////////////////////////////////////////////////////
Route::get('/promotion', 'NewsController@promotion')->name('promotion');
Route::get('/promotion_data', 'NewsController@promotion_data')->name('promotion_data');
Route::get('/insert_promotion', 'NewsController@insert_promotion')->name('insert_promotion');
Route::post('/save_promotion', 'NewsController@save_promotion')->name('save_promotion');
Route::get('/edit_promotion/{id}', 'NewsController@edit_promotion')->name('edit_promotion');
Route::post('/update_promotion', 'NewsController@update_promotion')->name('update_promotion');
Route::post('/delete_promotion', 'NewsController@delete_promotion')->name('delete_promotion');

////////////////////////////////// CONTACT ///////////////////////////////////////////////////////
Route::get('/contact_form', 'ContactController@contact_form')->name('contact_form');
Route::get('/contact_form_data', 'ContactController@contact_form_data')->name('contact_form_data');


//////////////////////////////////  FONTEND ///////////////////////////////////////////////////////

//////////////////////////////////////// FONTEND HOME //////////////////////////////////////////////
Route::get('/fontend_home', 'FontendHomeController@fontend_home')->name('fontend_home');

//////////////////////////////////////// FONTEND ABOUT //////////////////////////////////////////////
Route::get('/fontend_about', 'FontendAboutController@fontend_about')->name('fontend_about');

//////////////////////////////////////// FONTEND PRODUCT //////////////////////////////////////////////
Route::get('/fontend_product/{id}', 'FontendProductController@fontend_product')->name('fontend_product');

//////////////////////////////////////// FONTEND NEWS //////////////////////////////////////////////
Route::get('/fontend_news', 'FontendNewsController@fontend_news')->name('fontend_news');
Route::get('/fontend_news_detail/{id}', 'FontendNewsController@fontend_news_detail')->name('fontend_news_detail');

//////////////////////////////////////// FONTEND CONTACT //////////////////////////////////////////////
Route::get('/fontend_contact', 'FontendContactController@fontend_contact')->name('fontend_contact');