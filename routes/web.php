<?php
//phpinfo();



use Illuminate\Support\Facades\Route;



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

Route::get('/news', function () {
    // $name = 'Alexander';
    return view('news',
        ['param' => ['news_one' => 'Description_1', 'news_two' => 'Description_2'],
        'name' => ['name_one' => 'News First', 'name_two' => 'News Second']]);

});
