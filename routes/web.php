<?php

use Carbon\Carbon;
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

Route::get('/', 'BlogController@index');


//Route::get('all/{category}','CatController@show');
Route::get('categories/{category_id}/news','CatController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('post/{slug}', function($slug){

	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	 // 2 days ago
	return view('post', compact('post'));
	$post = Post::first();

	// Catch all page controller (place at the very bottom)
Route::get('{slug}', [
	'uses' => 'PagesController@getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');

});
