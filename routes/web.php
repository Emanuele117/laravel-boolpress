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

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Route::resource('products', ProductController::class)->only([
    'index',
    'show'
]);

Route::resource('posts', PostController::class)->only([
    'index',
    'show'
])->parameter('post', 'post:slug');


// categories/{category:slug}/posts -> >CategoryController@posts 

Route::get('categories/{category:slug}/posts', 'CategoryController@posts')->name('categories.posts');


Auth::routes();


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);

});


/*

Modello : Post 

Migrazione : posts

- title
- slug
- sub_title
- body

Seeder 

Controllers: admin/guest 


*/
