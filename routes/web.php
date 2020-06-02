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
Route::resource('ministries', 'MinistryController');
Route::get('ministry', ['as'   => 'pages.ministry', 'uses' => 'MinistryController@index']);
Route::post('/ministries/update', 'MinistryController@update')->name('update-ministry');


//Dashboard
Route::get('dashboard', ['as'   => 'pages.dashboard', 'uses' => 'DashboardController@index']);


//Extension
Route::get('addext', ['as'   => 'pages.addext', 'uses' => 'ExtensionController@index']);
Route::resource('addexts', 'ExtensionController');
Route::get('viewext', ['as'   => 'pages.viewext', 'uses' => 'ExtensionController@viewext']);
Route::get('showext/{id}', ['as'   => 'pages.showext', 'uses' => 'ExtensionController@show']);
Route::get('editext/{id}', ['as' => 'pages.editext', 'uses' => 'ExtensionController@edit']);


//Units & Commitee
Route::resource('units', 'UnitController');
Route::get('unit', ['as'   => 'pages.unit', 'uses' => 'UnitController@index']);
Route::post('/units/update', 'UnitController@update')->name('update-unit');
Route::get('committee', ['as' => 'pages.committee', 'uses' => 'UnitController@committee']);

//Events
Route::resource('event', 'EventsController');
Route::get('events', ['as'   => 'pages.events', 'uses' => 'EventsController@index']);
//Mails
Route::resource('tickets', 'MailController');
Route::get('ticket', ['as'   => 'pages.ticket', 'uses' => 'MailController@index']);

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
Route::get('ministryreport', ['as' => 'pages.ministryreport', 'uses' => 'ReportsController@ministryreport']);
Route::get('financialreport', ['as' => 'pages.financialreport', 'uses' =>  'ReportsController@financialreport']);
Route::get('carereport', ['as' => 'pages.carereport', 'uses' => 'ReportsController@carereport']);
Route::get('smrreport', ['as' => 'pages.smrreport', 'uses' => 'ReportsController@smrreport']);
Route::get('servicereport', ['as' => 'pages.servicereport', 'uses' => 'ReportsController@servicereport']);
Route::get('createcarereport', ['as' => 'pages.createcarereport', 'uses' => 'ReportsController@create']);
Route::get('createahomcarereport', ['as' => 'pages.createahomcarereport', 'uses' => 'ReportsController@createahom']);
Route::Post('/homstore', 'ReportsController@homstore')->name('homstore');
Route::Post('/ahomstore', 'ReportsController@ahomstore')->name('ahomstore');

// Route full layout
Route::get('full', ['as'   => 'pages.start', 'uses' => 'LayoutController@full']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
