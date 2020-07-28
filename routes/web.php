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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route content layout
Route::get('/', 'HomeController@index');

Route::resource('dashboard', 'DashboardController');
Route::get('dashboard-agent', 'DashboardController@agentindex');
Route::get('dashboard-admin', 'DashboardController@adminindex');
Route::resource('project', 'ProjectController');
Route::get('viewincart', 'ProjectController@create');
Route::resource('sales', 'SaleController');
route::get('saleslist', 'SaleController@saleslist');
Route::resource('legal', 'LegalController');
Route::resource('invest', 'InvestController');

Route::resource('ticket', 'TicketController');


Route::get('/history', 'FinancialController@history');
Route::get('/invoice', 'FinancialController@invoice');
Route::get('/commission', 'FinancialController@comm');
Route::get('/projection', 'FinancialController@projection');
Route::get('addproject', 'ProjectController@project');
Route::get('viewproject', 'ProjectController@view');
Route::get('updateproject', 'ProjectController@updateproject');
// user controller
Route::get('viewuser', 'UserController@viewuser');
Route::get('approveuser', 'UserController@approve');
Route::resource('adduser', 'UserController');

// Route full layout
Route::get('full', 'LayoutController@full');

