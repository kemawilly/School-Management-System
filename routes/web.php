<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\ProfileController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

// User Mangement Route users.view

Route::prefix('users')->group(function(){
    Route::get('/view', [UsersController::class, 'UsersView'])->name('users.view');
    Route::get('/add', [UsersController::class, 'UsersAdd'])->name('user.add');
    Route::post('/store', [UsersController::class, 'UsersStore'])->name('user.store');
    Route::get('/edit/{id}', [UsersController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}', [UsersController::class, 'UserUpdate'])->name('user.update');
    Route::get('/delete/{id}', [UsersController::class, 'UserDelete'])->name('user.delete');  
});

// User Profile 
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});