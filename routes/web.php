<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::auth();
Route::get('properties', [FrontendController::class, 'properties'])->name('properties');
Route::get('property', [FrontendController::class, 'property'])->name('property');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('properties', [PropertyController::class, 'index'])->name('properties');
    Route::get('show-property/{id}', [PropertyController::class, 'show']);
    Route::get('edit-properties/{id}', [PropertyController::class, 'edit']);
    Route::put('update-properties/{id}', [PropertyController::class, 'update']);
    Route::get('add-properties', [PropertyController::class, 'create'])->name('add-properties');
    Route::post('register-properties', [PropertyController::class, 'store']);
    Route::get('delete-property/{id}', [PropertyController::class, 'destroy']);

    Route::get('users', [UsersController::class, 'index'])->name('locations');

    Route::get('locations', [LocationController::class, 'index'])->name('locations');
    Route::get('add-location', [LocationController::class, 'create'])->name('add-location');
    Route::post('store-location', [LocationController::class, 'store']);
    Route::get('edit-locations/{id}', [LocationController::class, 'edit']);
    Route::put('update-locations/{id}', [LocationController::class, 'update'])->name('update-locations');
    Route::get('delete-location/{id}', [LocationController::class, 'destroy']);

    Route::get('users', [UserController::class, 'index']);
    Route::get('create-user', [UserController::class, 'create'])->name('users');
    Route::post('store-user', [UserController::class, 'store'])->name('store-user');
    Route::get('edit-user', [UserController::class, 'edit']);
    Route::put('edit-user/{id}', [UserController::class, 'update']);
    Route::get('delete-user/{id}', [UserController::class, 'delete']);

});
// Route::prefix('/')->namespace('App\Http\Controllers\Admin')->group(['middleware' => ['admin']], function () {
//     Route::get('/dashboard', 'AdminController@index');
// });

// Route::middleware(['auth'])->group(function () {
// });
// // Route::middleware(['admin'])->group(function () {
// // });

Route::get('/home', [HomeController::class, 'index'])->name('home');
