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

Route::get('/', 'PagesController@home')->name('home');

//Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

//Route::get('/register', 'PagesController@register')->name('register');


/*Route::post('/contact', function () {

    $data = request()->all();

        echo "Email: " . $data['email'] . '<br>';
        echo "Body: " . $data['body'];

}); */

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
