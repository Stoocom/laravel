<?php
//phpinfo();



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryOfNewsController;


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
//use ($text, $title)


Route::get('/', function () {
    // $name = 'Alexander';
    return view('welcome', ['param' => $name = "Guest!"]);

});

Route::get('/about', function () {
    return view('about_page', ['param' => $name = "Some information about our project!"]);

});

Route::get('/welcome', [
    'uses' => '\App\Http\Controllers\WelcomePageController@index'])
->where('userName', '[a-9]+');

Route::get('/categories', [
    'uses' => '\App\Http\Controllers\CategoryOfNewsController@showCategories']);

Route::get('/news/{id}', [
    'uses' => '\App\Http\Controllers\NewsController@getOneNews',
    'as' => 'newsOne',
]);

Route::get('/categories/{id}', [
    'uses' => '\App\Http\Controllers\CategoryOfNewsController@getNewsFromCategory']);