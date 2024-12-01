<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.Pages.home-page');
});

Route::get('/login-panel', function () {
    return view('auth.Pages.login');
});

Route::get('/register-panel', function () {
    return view('auth.Pages.register');
});


Route::post('/register-admin', [UserController::class, 'store'])->name('signup');
Route::get('/confirm-delete/{id}', [UserController::class, 'destroyUser'])->name('confirm-delete');

//Route::get('confirm-delete/', function () {
//    return view('auth.Pages.delete-confirmation');
//});

Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('update');


Route::get('/forgot-password-panel', function () {
    return view('auth.Pages.forgot-password');
});

Route::get('/contact', function () {
    return view('auth.Pages.contact-us');
});


Route::get('/about', function () {
    return view('auth.Pages.about-us');
});


Route::get('/user-dashboard', function () {
    return view('auth.Pages.dashboard');
});

// Route::get('/user-list', function () {
//     return view('auth.Pages.user-list');
// });

Route::get('/list', [UserController::class, 'ViewUser'])->name('list');
Route::fallback(function () {

    return view('auth.Pages.not-found-404');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
