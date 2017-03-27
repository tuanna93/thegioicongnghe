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

Route::get('/', 'HomeController@trangchu');
Route::get('/trang-chu.html', function(){
    return redirect('/');
});
Route::get('/san-pham.html','ProductController@index');
Route::get('/loai-san-pham/{cate}.html','ProductController@cate');
Route::get('/chi-tiet-san-pham/{pro}.html','ProductController@pro');
Route::get('/tin-tuc.html','PostController@index');
Route::get('/tin-tuc/{post}.html','PostController@post');
Route::get('/cart/mua-hang/{id}/{slug}.html','ProductController@cart_insert_product');
Route::get('/cart/mua-hang/get-cart-count.html','ProductController@get_cart_count');
Route::get('/cart/xoa-san-pham/{id}.html','ProductController@cart_delete_product');
Route::get('/cart/view.html','ProductController@cart_delete_product');
Route::post('/cart/mua-hang.html','ProductController@buy_detail');
Route::get('/gio-hang.html','ProductController@cart');
Route::get('/thanh-toan.html','ProductController@getcheckout');
Route::post('/thanh-toan.html','ProductController@postcheckout');
Route::get('/tim-kiem','HomeController@search');
Route::get('/{page}.html','HomeController@Page');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('', 'Admin\\AdminController@admin');
    Route::get('login.html','Auth\\LoginController@showLoginForm');
    Route::post('login.html','Auth\\LoginController@login');
    Route::get('logout.html','Admin\\AdminController@getLogin');
    Route::get('dashboard.html', 'Admin\\AdminController@dashboard');
    Route::group(['prefix' => 'cate'], function () {
       Route::get('add.html','Admin\\CateController@getCateAdd');
       Route::post('add.html','Admin\\CateController@postCateAdd');
       Route::get('list.html','Admin\\CateController@getCateList');
       Route::get('view/{slug}.html','Admin\\CateController@getView');
       Route::get('edit/{slug}.html','Admin\\CateController@getEdit');
       Route::post('edit/{slug}.html','Admin\\CateController@postEdit');
       Route::get('delete/{slug}.html','Admin\\CateController@getDelete');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('add.html','Admin\\ProductController@getAdd');
        Route::post('add.html','Admin\\ProductController@postAdd');
        Route::get('list.html','Admin\\ProductController@getList');
        Route::get('view/{slug}.html','Admin\\ProductController@getView');
        Route::get('edit/{slug}.html','Admin\\ProductController@getEdit');
        Route::post('edit/{slug}.html','Admin\\ProductController@postEdit');
        Route::get('delete/{slug}.html','Admin\\ProductController@getDelete');
    });
    Route::group(['prefix' => 'post'], function () {
        Route::get('add.html','Admin\\PostsController@getAdd');
        Route::post('add.html','Admin\\PostsController@postAdd');
        Route::get('list.html','Admin\\PostsController@getList');
        Route::get('view/{slug}.html','Admin\\PostsController@getView');
        Route::get('edit/{slug}.html','Admin\\PostsController@getEdit');
        Route::post('edit/{slug}.html','Admin\\PostsController@postEdit');
        Route::get('delete/{slug}.html','Admin\\PostsController@getDelete');
    });
    Route::group(['prefix' => 'onepage'], function () {
        Route::get('add.html','Admin\\AdminController@getAdd');
        Route::post('add.html','Admin\\AdminController@postAdd');
        Route::get('list.html','Admin\\AdminController@getList');
        Route::get('view/{slug}.html','Admin\\AdminController@getView');
        Route::get('edit/{slug}.html','Admin\\AdminController@getEdit');
        Route::post('edit/{slug}.html','Admin\\AdminController@postEdit');
        Route::get('delete/{slug}.html','Admin\\AdminController@getDelete');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('list.html','Admin\\OrderController@getList');
        Route::get('view/{id}','Admin\\OrderController@getView');
        Route::get('accept/{id}','Admin\\OrderController@accept');
        Route::get('delete/{id}','Admin\\OrderController@getDelete');
    });
    Route::group(['prefix' => 'menu'], function () {
        Route::get('list.html','Admin\\MenuController@getList');
        Route::get('add.html','Admin\\MenuController@getAdd');
        Route::post('add.html','Admin\\MenuController@postAdd');
        Route::get('edit/{id}','Admin\\MenuController@getEdit');
        Route::post('edit/{id}','Admin\\MenuController@postEdit');
        Route::get('delete/{id}','Admin\\MenuController@getDelete');
    });
    Route::group(['prefix' => 'adv'], function () {
        Route::get('list.html','Admin\\AdvController@getList');
        Route::get('add.html','Admin\\AdvController@getAdd');
        Route::post('add.html','Admin\\AdvController@postAdd');
        Route::get('edit/{id}','Admin\\AdvController@getEdit');
        Route::post('edit/{id}','Admin\\AdvController@postEdit');
        Route::get('delete/{id}','Admin\\AdvController@getDelete');
    });
    Route::get('options.html','Admin\\AdminController@getOption');
    Route::post('options.html','Admin\\AdminController@postOption');
    Route::get('loadkieutrang-{id}','Admin\\MenuController@loadkieutrang');
    Route::get('logout.html','Auth\\LoginController@logout');
});
Auth::routes();

Route::get('/home', function(){
    return redirect('/admin');
});
Route::any('{all}', 'HomeController@error');