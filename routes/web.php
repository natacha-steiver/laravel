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
/*
Route::get('/', function () {
    return view('welcome');
});



View::composer('categories.liste', function($view){
  $view->with('categories', App\Http\Models\Categories::all());
});
Route::resource('/', 'CategoriesController');
 */

Route::get('/', 'CategoriesController@index')->name('categories');
Route::get('/categories/{id}/{slug}', 'CategoriesController@show', function ($id, $slug) {
  return 'Categories '.$id;
  return $slug;
})->name('categories')->where(['id' => '[0-9]+', 'slug' => '[a-z]+']);
