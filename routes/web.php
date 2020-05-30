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

// Route content layout
Route::get('/', ['as'   => 'pages.start', 'uses' => 'LayoutController@full']);


//Ministry
Route::resource('ministry', 'MinistryController');
Route::post('/ministry/update', 'MinistryController@update')->name('update-ministry');


//Dashboard
Route::get('dashboard', ['as'   => 'pages.dashboard', 'uses' => 'DashboardController@index']);


//Extension
Route::get('addext', ['as'   => 'pages.addext', 'uses' => 'ExtensionController@index']);
Route::resource('addexts', 'ExtensionController');
Route::get('viewext', ['as'   => 'pages.viewext', 'uses' => 'ExtensionController@viewext']);
Route::get('editext/{id}', ['as' => 'pages.editext', 'uses' => 'ExtensionController@edit']);


//Units & Commitee
Route::resource('unit', 'UnitController');
Route::post('/unit/update', 'UnitController@update')->name('update-unit');
Route::get('committee', 'UnitController@committee');

//Events
Route::resource('events', 'EventsController');

//Mails
Route::resource('ticket','MailController');

// user controller
Route::get('approveuser', 'UserController@approve');
Route::get('viewuser', 'UserController@viewuser');
Route::get('register', 'UserController@register');
Route::get('profile', 'UserController@profile');
Route::get('adduser', ['as'   => 'pages.adduser', 'uses' => 'UserController@adduser']);


// members controller
Route::get('members', ['as' => 'pages.members', 'uses' => 'MembersController@index']);
Route::resource('member', 'MembersController');
Route::get('viewmembers', ['as' => 'pages.viewmembers', 'uses' => 'MembersController@viewmembers']);
Route::get('memberprofile/{id}', ['as' => 'pages.memberprofile', 'uses' => 'MembersController@show']);
Route::post('/member/store', 'MembersController@store');
Route::post('/member/update', 'MembersController@update')->name('update');


// Report 
Route::resource('report', 'ReportsController');
Route::get('/ministryreport', 'ReportsController@ministryreport');
Route::get('/financialreport', 'ReportsController@financialreport');
Route::get('/carereport', 'ReportsController@carereport');
Route::get('/smrreport', 'ReportsController@smrreport');
Route::get('/servicereport', 'ReportsController@servicereport');
Route::get('/createcarereport', 'ReportsController@create');
Route::get('/createahomcarereport', 'ReportsController@createahom');
Route::Post('/homstore', 'ReportsController@homstore')->name('homstore');
Route::Post('/ahomstore', 'ReportsController@ahomstore')->name('ahomstore');

// Route full layout
Route::get('full', 'LayoutController@full');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
