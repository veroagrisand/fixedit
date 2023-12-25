<?php

use App\Http\Controllers\foto_createcommunity;
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

// Route::get('/createcommunity', function () {
//     return view('layouts/createcommunity');
// })->middleware(['auth', 'verified'])->name('createcommunity');

Route::get('/profilcommunity', function () {
    return view('layouts/profilcommunity');
})->middleware(['auth', 'verified'])->name('profilcommunity');

Route::get('/galeri', function () {
    return view('layouts/galericommunity');
})->middleware(['auth', 'verified'])->name('galericommunity');

Route::get('/event', function () {
    return view('layouts/profilcommunity');
})->middleware(['auth', 'verified'])->name('profilcommunity');

Route::get('/forum', function () {
    return view('layouts/forumcommunity');
})->middleware(['auth', 'verified'])->name('forumcommunity');

Route::get('/editprofil', function () {
    return view('profile/partials/update-profile-information-form');
})->middleware(['auth', 'verified'])->name('update-profile-information-form');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/tampil', function () {
    return view('profile/userdshbrd');
})->middleware(['auth', 'verified'])->name('profile.partials.userdshbrd');

Route::get('/tampil2', function () {
    return view('profile/usermyprofile');
})->middleware(['auth', 'verified'])->name('profile.partials.userdshbrd');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/createcommunity', [CreateCommunityController::class, 'create'])->name('createcommunity.create');
    Route::post('/createcommunity', [CreateCommunityController::class, 'store'])->name('createcommunity.store');
});



// Route::get('/coba', [CreateCommunityController::class, 'view']);
// Route::prefix('admin')->group(function () {
//     Route::post('/createcommunity', [CreateCommunityController::class, 'store'])->name('foto_createcommunity.store');
// });

// Route::get('/createcommunity', 'CreateCommunityController@create')->name('createcommunity');

// Route::post('/createcommunity', [foto_createcommunity::class, 'store'])->name('foto_createcommunity.store');
// Route::get('/edit', function () {
//     return view('profile/partials/update-profile-information-form');
// })->middleware(['auth', 'verified'])->name('profile.partials.userdshbrd');
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

