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
Route::get('/', 'HandGameController@index')->name('game.index');
Route::post('/store', 'HandGameController@store')->name('game.store');
// Route::post('/check', 'HandGameController@check')->name('game.store');
//  Route::get('/', function() {
//     $tasks = [
//         'Go to store',

//         'Go to market',

//         'Go to work'
//     ];

//     return view('welcome', [
//         'tasks' => $tasks,
//         'foo' => 'footbar'//'<script>alert("foobar")</script>'
//     ]);
//  });

//  Route::get('/contact', function() {
//     return view('contact');
// });

// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/layout', function() {
//     return view('layout');
// });
// Route::get('/', function() {
//     return view('login');
// });
// Route::get('/index', 'HandGameController@index')->name('game.index');
// Route::post('/check', 'HandGameController@check')->name('game.store');
// Route::post('/store', 'HandGameController@store')->name('game.login');
//Route::post('/store', 'BookController@store')->name('books.store');
//Route::resource('books', 'BookController');

// function () {
//     return view('Sprawdz');
// });
// Route::group(['middleware' => 'roles',
// 'roles' => ['Admin','Moderator']
// ], function () {
//     Route::resource('books', 'BookController');;
// });


// Auth::routes();
// Route::get('/', 'HomeController@index')->name('welcome');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function() {
    //     $tasks = [
    //         'Go to store',
    
    //         'Go to market',
    
    //         'Go to work'
    //     ];
    
    //     return view('welcome', [
    //         'tasks' => $tasks,
    //         'foo' => 'footbar'//'<script>alert("foobar")</script>'
    //     ]);
    //  });
    
    //  Route::get('/contact', function() {
    //     return view('contact');
    // });
    
    // Route::get('/about', function() {
    //     return view('about');
    // });
    
    // Route::get('/layout', function() {
    //     return view('layout');
    // });