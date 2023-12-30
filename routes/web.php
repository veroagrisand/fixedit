<?php
use App\Http\Controllers\CreateCommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Superuser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landpage');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('layouts.dashboard');})->name('dashboard');
    Route::get('/Community', [HomeController::class, 'comunity'])->name('community');
    Route::get('/About', [HomeController::class, 'about'])->name('about');

    // profile
    Route::get('/Profile-Dasboard', [ProfileController::class, 'dasboard'])->name('profile.dasboard');
    Route::get('/Profile-Profile', [ProfileController::class, 'profile'])->name('profile.prifile');
    Route::get('/Profile-Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/Profile-Edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/Profile-Edit', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //membuat komunitas
    Route::get('/createcommunity-member', [CreateCommunityController::class, 'create'])->name('createcommunity.create');
    Route::post('/createcommunity-member', [CreateCommunityController::class, 'store'])->name('createcommunity.store');

    // Route::middleware(['member'])->group(function () {

    // });

    //amin_group
    Route::middleware(['admin_group'])->group(function () {
        // komunitas
        Route::get('/mycommunity', [CreateCommunityController::class, 'mycommunity'])->name('mycommunity');
        Route::get('/mycommunity/events/{id_komunitas}', [CreateCommunityController::class, 'event'])->name('mycommunity.Event');
        Route::get('/mycommunity/galery/{id_komunitas}', [CreateCommunityController::class, 'galery'])->name('mycommunity.Galery');
        Route::get('/mycommunity/forum/{id_komunitas}', [CreateCommunityController::class, 'forum'])->name('mycommunity.Forum');
        Route::get('/mycommunity/edit/{id_komunitas}', [CreateCommunityController::class, 'edit'])->name('mycommunity.Edit');
        Route::get('/mycommunity/add-event/{id_komunitas}', [CreateCommunityController::class, 'addEvent'])->name('mycommunity.AddEvent');
        Route::post('/mycommunity/add-event-post/{id_komunitas}', [CreateCommunityController::class, 'addEventPost'])->name('mycommunity.addEventPost');
    });
    //superuser akses
    Route::middleware(['superuser'])->group(function () {
        Route::get('/superuser', [Superuser::class, 'index'])->name('superuser.dashboard');
        Route::get('/logout', [Superuser::class, 'logout'])->name('Superuser.logout');
    });

});

// Include SuperUserMiddleware routes
require __DIR__.'/auth.php';
