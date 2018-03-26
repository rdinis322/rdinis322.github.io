<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index');

Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::get('page/add','IndexController@add');
Route::post('page/add','IndexController@store')->name('articleStore');
Route::delete('page/delete/{article}', function(\App\Article $article) {
	
	//$article_tmp = \App\Article::where('id', $article)->first;
	
	//dd($article);
	
	
	$article->delete();
	return redirect('/');
	
})->name('articleDelete');
