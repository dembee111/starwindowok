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

//---------------Front route uud---------------//
Route::group(['middleware' => 'counter'], function(){

         Route::get('/', 'PageController@index')->name('home');
         
     });

Route::get('/about', 'PageController@about')->name('about');

Route::get('/service', 'PageController@service')->name('service');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/calculator', 'PageController@calculator')->name('calculator');

Route::get('/branch', 'PageController@branch')->name('branch');

Route::get('/posts', 'PageController@posts')->name('posts');

Route::group(['middleware' => 'postview'], function(){

       Route::get('/post/{id}', 'PageController@post')->name('post');

  });

Route::post('admin/insert', 'CustomersController@insert')->name('public.insert');


Route::resource('order', 'OrderController'); 

Route::put('cancelorder/{orderid}', 'OrderController@cancel')->name('order.cancel'); 

Route::get('admin/profile', 'AdminUsersController@profile')->name('users.profile'); 

//---------Back route uud ----------------//

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('back.layouts.app');
// });
Route::resource('admin/customer', 'CustomersController');  

Route::group(['middleware' => 'admin'], function(){

     Route::resource('admin/users', 'AdminUsersController'); 
     Route::resource('admin/posts', 'AdminPostsController');
     Route::get('/oldorder', 'OrderController@ordered')->name('oldorder'); 
     Route::resource('admin/medias', 'AdminMediasController');
     Route::get('admin/socials', 'ContentController@index')->name('socials.index');
     Route::patch('admin/socials/{id}', 'ContentController@update')->name('socials.update'); 
     Route::get('admin/contents', 'ContentController@indexContent')->name('contents.index');     
     Route::patch('admin/content/{id}', 'ContentController@updateContent')->name('contents.update');

     Route::get('admin/logs', 'LogController@index')->name('logs'); 
});

Route::get('markAsRead', function(){
	Auth::user()->unreadNotifications->markAsRead();

	return redirect()->back();
})->name('markRead');




