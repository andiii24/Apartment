<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::auth();
Route::get('/', function () {
    return view('admin.dashboard');
});

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('properties', [PropertyController::class, 'index']);
    Route::get('show-property/{id}', [PropertyController::class, 'show']);
    Route::get('edit-properties/{id}', [PropertyController::class, 'edit']);
    Route::put('update-properties/{id}', [PropertyController::class, 'update']);
    Route::get('add-properties', [PropertyController::class, 'create'])->name('add-properties');
    Route::post('register-properties', [PropertyController::class, 'store']);
    Route::delete('delete-property/{}', [PropertyController::class, 'destroy']);

    Route::post('users', [UserController::class, 'index']);
    Route::post('create-user', [UserController::class, 'show']);
    Route::post('add-user', [UserController::class, 'create']);

});
// Route::prefix('/')->namespace('App\Http\Controllers\Admin')->group(['middleware' => ['admin']], function () {
//     Route::get('/dashboard', 'AdminController@index');
// });

// Route::middleware(['auth'])->group(function () {
// });
// // Route::middleware(['admin'])->group(function () {
// // });

Route::get('/home', [HomeController::class, 'index'])->name('home');
