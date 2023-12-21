<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts/landpage');
});

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/community', function () {
    return view('layouts/community');
})->middleware(['auth', 'verified'])->name('community');

Route::get('/about', function () {
    return view('layouts/about');
})->middleware(['auth', 'verified'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/community', function () {
//     return view('community');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/contact', function () {
//     return view('layouts/contact');
// })->middleware(['auth', 'verified'])->name('contact');

