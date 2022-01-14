<?php

use App\Models\Post;
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

Route::get('/', function () {
    die('test1');
});

// Route::get('/posts/{post}', function ($slug) {
//     return view('post', [
//         'post' => Post::find($slug)
//     ]);
// })->where('post', '[A-z_\-]+');

Route::get('/projecten', 'App\Http\Controllers\ProjectsController@index')->name('projects.index');
Route::get('/projecten/create', 'App\Http\Controllers\ProjectsController@create')->name('projects.create');
Route::get('/projecten/create', 'App\Http\Controllers\ProjectsController@create')->name('projects.edit'); 

// Retrieving data from the projects/create view giving it to the projects controller.
Route::get('/insert','App\Http\Controllers\ProjectsController@index')->name('project.form');
Route::post('/create','App\Http\Controllers\ProjectsController@store')->name('project.create');

