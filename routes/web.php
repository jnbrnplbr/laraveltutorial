<?php

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

//Route -> Controller -> View
Route::get('/home', 'PageController@home');
Route::get('/services', 'PageController@services');
Route::get('/about', 'PageController@about');


Route::get('/posts','PostController@posts');
Route::get('/posts/{id}','PostController@show');

Route::get('/rooms','RoomController@index');
Route::get('/rooms/{id}', 'RoomController@show');












//Route -> View 
// Route::get('/home', function () {

//    $title = 'Home Page';

//    return view('welcome',compact('title'));
// });
// Route::get('/services', function () {

//    $title = 'Services Page';

//    return view('pages.services.services')->with('title',$title);

// });

// Route::get('/contact', function () {

//    $title = 'Contact Page';

//    return view('contact', compact('title'));

// });










// Route::get('/about', function () {
   
//    $title = 'About Page';

//    $description = 'spoken or written representation or account of a person, object, or event.';

//    return view('about', [

//       'title' => 'About Page',
//       'description'  => 'spoken or written representation or account of a person, object, or event.'

//    ]);

// });