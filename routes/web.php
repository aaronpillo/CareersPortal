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

Route::get('/','PagesController@index');

Route::get('/itservices','PagesController@itservices');
Route::get('/financeaccounting','PagesController@financeaccounting');
Route::get('/legalsupport','PagesController@legalsupport');
Route::get('/salesmarketing','PagesController@salesmarketing');
Route::get('/gallery','PagesController@gallery');


Auth::routes();


//Route::get('/admin','PagesController@Admin');

Route::get('/admin/job_opportunities/{id}/deactivate', 'JobsController@deactivate');
Route::get('/admin/job_opportunities/{id}/activate', 'JobsController@activate');
Route::resource('/admin/job_opportunities', 'JobsController');

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');
Route::get('/dashboard', 'JobsController@index');
Route::get('/adminz/home', 'HomeController@home');