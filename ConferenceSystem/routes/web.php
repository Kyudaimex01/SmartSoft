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

Route::get('/news', function () {
    $posts = App\Post::latest('published_at')->get();

    return view('welcome', compact('posts'));//
});

Route::get('posts', function(){
    return App\Post::all();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function (){
    return view('about');
});

Route::get('/speaker', function (){
    return view('speaker');
});


/*
 * pagina principal
 */
Route::get('/', function (){
    return view('index');
});