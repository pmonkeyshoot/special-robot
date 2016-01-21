<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', function()
{
	return View::make('login');
});

Route::get('user/main', function()
{
	return View::make('user/user_main');
});

Route::get('user/fill', function()
{
	return View::make('user/user_fill');
});

Route::get('user/fill2', function()
{
	return View::make('user/user_fill_2');
});

Route::get('user/record', function()
{
	return View::make('user/user_record');
});

Route::get('user/record/inprogress', function()
{
	return View::make('user/user_record_inprogress');
});

Route::get('user/record/approve', function()
{
	return View::make('user/user_record_approve');
});

Route::get('user/info', function()
{
	return View::make('user/user_info');
});

Route::get('user/info/spouse', function()
{
	return View::make('user/user_info_spouse');
});

Route::get('user/info/parents', function()
{
	return View::make('user/user_info_parents');
});

Route::get('user/info/son', function()
{
	return View::make('user/user_info_son');
});

Route::get('admin/main', function()
{
	return View::make('admin/admin_main');
});

Route::get('admin/checkrecord', function()
{
	return View::make('admin/admin_check_record');
});

Route::get('admin/checkrecordinp', function()
{
	return View::make('admin/admin_check_record_inprogress');
});

Route::get('admin/adduser', function()
{
	return View::make('admin/admin_adduser');
});

Route::post('admin/save_register', 'PersonController@save_register');

Route::get('admin/addparents', function()
{
	return View::make('admin/admin_addparents');
});

Route::get('admin/search/user', function()
{
	return View::make('admin/admin_search_user');
});

Route::get('admin/search/doc', function()
{
	return View::make('admin/admin_search_doc');
});

Route::get('admin/report', function()
{
	return View::make('admin/admin_report');
});

Route::get('admin/report/summary', function()
{
	return View::make('admin/admin_report_summary');
});

Route::get('admin/report/doc', function()
{
	return View::make('admin/admin_report_doc');
});

Route::get('admin/graph', function()
{
	return View::make('admin/admin_graph');
});





