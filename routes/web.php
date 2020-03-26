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
Route::get('/', 'LayoutController@content');

Route::resource('dashboard', 'DashboardController');
Route::resource('project', 'ProjectController');
Route::get('viewincart', 'ProjectController@create');
Route::resource('sales', 'SaleController');
Route::resource('legal', 'LegalController');
Route::resource('adduser', 'UserController');
Route::resource('ticket', 'TicketController');
Route::get('viewuser', 'UserController@create');
Route::get('approveuser', 'UserController@show');
Route::get('/history', 'FinancialController@history');
Route::get('addproject', 'ProjectController@project');
Route::get('viewproject', 'ProjectController@view');
Route::get('updateproject', 'ProjectController@updateproject');

// Route full layout
Route::get('full', 'LayoutController@full');