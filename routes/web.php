<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;

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
    return view('admin.dashboard');
});

Auth::routes();
// Route::namespace('App\Http\Controllers\Admin')->group(['middleware' => 'admin'], function () {
    Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
});
// Route::prefix('/')->namespace('App\Http\Controllers\Admin')->group(['middleware' => ['admin']], function () {
//     Route::get('/dashboard', 'AdminController@index');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('properties', 'Admin\PropertyController@index');
//     Route::get('create-properties', 'Admin\PropertyController@show');
//     Route::get('edit-properties', 'Admin\PropertyController@edit');
//     Route::post('update-properties', 'Admin\PropertyController@update');
//     Route::post('add-properties', 'Admin\PropertyController@create');
//     Route::delete('delete-properties', 'Admin\PropertyController@destroy');
// });
// // Route::middleware(['admin'])->group(function () {
// Route::post('users', 'Admin\UserController@index');
// Route::post('create-user', 'Admin\UserController@show');
// Route::post('add-user', 'Admin\UserController@create');
// Route::get('my-orders', 'Frontend\UserController@index');
// Route::get('view-order/{id}', 'Frontend\UserController@view');
// Route::get('wishlist', 'Frontend\WishListController@index');
// // });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
