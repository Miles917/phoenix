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

Route::get('/', function() {
    return view('test');
});







Route::get('/about', function () {
    return view('pages.about');

});

Route::get('/users/{id}', function ($id) {
    return 'This is user'.$id;

});


Route::get('/test', function () {
    return view('dashboard');
});

Route::get('/fileCabinet/listFiles', function () {
    return view('fileCabinet/listFiles');
});


//Route::get('fileCabinet/index', array('as' => 'getFileCabinetMain', 'uses' => 'FileController@getIndex'));
Route::post('fileCabinet/postNewFile', array('as' => 'postNewFile', 'uses' => 'FileController@postNewFile'));//
Route::get('fileCabinet/postNewFile', array('as' => 'postNewFile', 'uses' => 'FileController@postNewFile'));//
Route::post('fileCabinet/getAllFilesJson', array('as' => 'getAllFilesJson', 'uses' => 'FileController@getFileCabinetTable'));//
Route::get('fileCabinet/getAllFilesJson', array('as' => 'getAllFilesJson', 'uses' => 'FileController@getFileCabinetTable'));//
Route::delete('fileCabinet/delete', array('as' => 'postCompanyFileDelete', 'uses' => 'FileController@deleteCompanyFile'));//





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
