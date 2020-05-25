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
Route::get('/', 'LayoutController@full');


//Ministry
Route::resource('ministry', 'MinistryController');
Route::post('/ministry/update', 'MinistryController@update')->name('update-ministry');


//Dashboard
Route::resource('dashboard', 'DashboardController');

//Extension
Route::resource('addext', 'ExtensionController');
Route::get('viewext', 'ExtensionController@viewext');
// Route::get('/addext/{id}', 'ExtensionController@destroy')->name('destroy');

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
Route::resource('adduser', 'UserController');

// members controller
Route::resource('members', 'MembersController');
Route::get('viewmembers', 'MembersController@viewmembers');
Route::post('/members/store', 'MembersController@store');
Route::post('/members/update', 'MembersController@update')->name('update');


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
