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

Route::get('/', 'FrontendController@index')->name('/');
Route::get('books', 'FrontendController@books')->name('books');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('book/list/download/{id}', 'FrontendController@booklistdownload')->name('book.list.download');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home/banner', 'HomeController@banner')->name('home.banner');
Route::get('/home/banner/edit', 'HomeController@banneredit')->name('home.banner.edit');
Route::post('/home/banner/update/{id}', 'HomeController@bannerupdate')->name('home.banner.update');
Route::get('user/delete/{user_id}', 'HomeController@userdelete')->name('user.delete');
Route::post('home/banner/add', 'HomeController@homebanneradd')->name('home.banner.add');
Route::get('home/banner/delete/{id}', 'HomeController@bannerimgdelete')->name('banner.img.delete');
Route::get('home/foreigner/dream', 'HomeController@foreignerdream')->name('foreigner.dream');
Route::post('home/foreigner/dream/add', 'HomeController@foreignerdreamadd')->name('foreigner.dream.add');
Route::get('home/event', 'HomeController@event')->name('event.index');
Route::post('home/event/update', 'HomeController@eventupdate')->name('even.upadate');

// Profile controller route start
Route::resource('profile','ProfileController');
Route::post('profile/name/post', 'ProfileController@profilenamechange')->name('profile.name.post');
Route::post('profile/photo/post', 'ProfileController@profilephotopost')->name('profile.photo.post');
Route::post('profile/password/post', 'ProfileController@profilepasswordpost')->name('profile.password.post');


// books controller route start
Route::get('deshboard/books/mybooks', 'BookController@mybook')->name('book.my.book');
Route::post('deshboard/books/mybooks/store', 'BookController@mybookstore')->name('my.book.store');
Route::post('deshboard/books/booklist/store', 'BookController@bookliststore')->name('book.list.store');
Route::get('deshboard/books/mybooks/delete/{id}', 'BookController@mybookdelete')->name('my.book.delete');
Route::get('deshboard/books/booklist/view/{id}', 'BookController@booklistview')->name('book.list.view');
Route::get('deshboard/books/booklist/delete/{id}', 'BookController@booklistdelete')->name('book.list.delete');
Route::get('deshboard/books/booklist', 'BookController@booklist')->name('book.book.list');

Route::resource('social', 'SocilaController');
Route::get('social/delete/{id}', 'SocilaController@socialdelete')->name('social.delete');

// bestsellre controller route start
Route::resource('bestseller', 'BestsellerController');
Route::get('bestseller/delete/{id}', 'BestsellerController@bestsellerdelete')->name('best.seller.delete');


// about controller route start
Route::get('about/banner', 'AboutController@aboutbanner')->name('about.banner');
Route::post('about/banner/update', 'AboutController@aboutbannerupdate')->name('about.banner.update');
Route::get('about/mybio', 'AboutController@aboutmybio')->name('about.my.bio');
Route::post('about/mybio/update', 'AboutController@aboutmybioupdate')->name('about.my.bio.update');
