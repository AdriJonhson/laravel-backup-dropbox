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

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-folder', 'SiteController@createFolder');
Route::get('list-folders', 'SiteController@listFolders');
Route::get('upload', 'SiteController@upload');
Route::get('backup', 'BackupController@backup');