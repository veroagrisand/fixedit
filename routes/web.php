<?php


use App\Http\Controllers\CreateCommunityController;
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
    return view('landpage');
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

Route::get('/tampil1', function () {
    return view('profile/userdshbrd');
})->middleware(['auth', 'verified'])->name('profile.partials.userdshbrd');

Route::get('/tampil2', function () {
    return view('profile/usermyprofile');
})->middleware(['auth', 'verified'])->name('profile.partials.userdshbrd');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/createcommunity', [CreateCommunityController::class, 'create'])->name('createcommunity.create');
    Route::post('/createcommunity', [CreateCommunityController::class, 'store'])->name('createcommunity.store');

    Route::get('/mycommunity', [CreateCommunityController::class, 'mycommunity'])->name('mycommunity');
    Route::get('/mycommunityEvent/{id}', [CreateCommunityController::class, 'event'])->name('mycommunity.Event');
    Route::get('/mycommunityGalery/{id}', [CreateCommunityController::class, 'galery'])->name('mycommunity.Galery');
    Route::get('/mycommunityForum/{id}', [CreateCommunityController::class, 'forum'])->name('mycommunity.Forum');
    Route::get('/mycommunityEdit/{id}', [CreateCommunityController::class, 'edit'])->name('mycommunity.Edit');
});

require __DIR__.'/auth.php';
