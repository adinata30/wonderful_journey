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

Route::group(["middleware"=>'finalexam:Member'],function(){
    Route::get('greeting','UserController@greeting')->name('greeting');
    Route::get('profile','UserController@editProfile')->name('profile');
    Route::get('blog','UserController@viewBlog')->name('blog');
    Route::post("/update/user","UserController@updateProfile");
    Route::post("/delete-article/{id}",'ArticleController@deleteArticle');
    Route::get("new-article","ArticleController@addArticle");
    Route::post("/add-article","ArticleController@storeArticle");

});
Route::group(["middleware"=>'finalexam:Admin'],function(){
    Route::get('user','UserController@userPanel');
    Route::get('admin','UserController@adminPanel');
    Route::post("delete/user/{id}",'UserController@deleteUser');
    Route::post("/delete/article/{id}",'ArticleController@deleteArticle');
});

Route::get('/', function () {
    return redirect('/home');
});


Route::get('/home', 'ViewController@home')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/article/{id}','ArticleController@readArticle');
Route::get('/category/{name}','CategoryController@viewCategory');
Route::get('/about',function(){
    return view('about');
});

Auth::routes();