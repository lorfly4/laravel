<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\sesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\sesiController::class, 'index'])->name('login');
Route::post('/', [App\Http\Controllers\sesiController::class, 'login'])->name('login.post');



// Route::get('/admin', [App\Http\Controllers\adminController::class, 'index']);
// Route::get('/guest', [App\Http\Controllers\guestController::class, 'index']);
// Route::get('/logout', [App\Http\Controllers\sesiController::class, 'logout']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/guest', [App\Http\Controllers\GuestController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\sesiController::class, 'logout']);
});


// Route::resource('/login', \App\Http\Controllers\LoginUser::class);

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::resource('/admin', \App\Http\Controllers\listDisiplin::class);

// Route::resource('/admin', \App\Http\Controllers\listUser::class);




// Route::get('/guest', function () {
//     return view('guest');
// });

