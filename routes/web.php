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

Route::get('/', 'UserController@index')->name('home');
Route::get('aboutus', 'UserController@aboutus')->name('aboutus');
Route::get('contactus', 'UserController@contactus')->name('contactus');
Route::post('contactus', 'UserController@sendcontact')->name('sendcontact');

Route::get('pricelist', 'UserController@pricelist')->name('pricelist');
Route::get('allposts', 'UserController@allposts')->name('allposts');
Route::get('search', 'UserController@showsearch')->name('search');
Route::post('search', 'UserController@search')->name('search');
Route::get('application', 'AdminController@application')->name('application');
Route::post('applicationcontact', 'AdminController@applicationcontact')->name('applicationcontact');

Route::get('newsletters', 'AdminController@newsletters')->name('newsletters');
Route::get('shownewsletter', 'AdminController@shownewsletter')->name('shownewsletter');

Route::get('post/{id}', 'UserController@viewpost')->name('viewpost');

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');

Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'RegisterController@register');

Route::get('first', 'RegisterController@showRegistrationForm')->name('first')->middleware('isFirstRegister');
Route::post('firstregister', 'RegisterController@firstregister')->name('firstregister')->middleware('isFirstRegister');

Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('test', 'AdminController@checkoptionsvalue')->name('test');
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth:web',
], function(){

    Route::get('', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/addposting', 'AdminController@addposting')->name('admin.addposting');
    Route::post('/addposting', 'AdminController@postnewadd')->name('admin.postadd');
    Route::get('/alllist', 'AdminController@alllist')->name('admin.alllist');
    Route::get('/allposts', 'AdminController@allposts')->name('admin.allposts');
    Route::get('/allpostslist', 'AdminController@allpostslist')->name('admin.allpostslist');
    Route::get('/deletepost/{id}', 'AdminController@deletepost')->name('admin.deletepost');
    Route::get('/postaction/{id}', 'AdminController@postaction')->name('admin.postaction');
    Route::get('/addnewsletter', 'AdminController@showaddnewsletter')->name('admin.addnewsletter');
    Route::post('/addnewsletter', 'AdminController@addnewsletter')->name('admin.addnewsletter');
    Route::get('/addpricelist', 'AdminController@addpricelist')->name('admin.pricelist');
    Route::post('/addpricelist', 'AdminController@uploadpricelist')->name('admin.addpricelist');
    Route::get('/editpost','AdminController@showedit')->name('admin.editpost');
    Route::post('/editpost','AdminController@editpost')->name('admin.editpost');
    Route::post('/editpostorder','AdminController@editpostorder')->name('admin.editpostorder');
    Route::get('/newsletters','AdminController@newsletters')->name('admin.newsletters');
    Route::post('/editnewsletter', 'AdminController@editnewsletter')->name('admin.editnewsletter');
    
    
    
    

    
    
    
    
}

);