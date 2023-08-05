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


// Admin Route
Route::prefix('admin')->group(function (){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'index'])->name('login_form');
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])
        ->name('admin.dashboard')
        ->middleware('admin');
    Route::post('/login/owner', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
});

// end of admin route


//frsc route
Route::prefix('frscs')->group(function (){
    Route::get('/login', [\App\Http\Controllers\FRSCController::class, 'index'])->name('frsc.login.form');
    Route::post('/login/owner', [\App\Http\Controllers\FRSCController::class, 'login'])->name('frsc.login');
    Route::get('/dashboard', [\App\Http\Controllers\FRSCController::class, 'dashboard'])
        ->name('dashboard.frsc')
        ->middleware('frsc');
});

//inec route
Route::prefix('inec')->group(function (){
    Route::get('/login', [\App\Http\Controllers\InecController::class, 'index'])->name('inec.login.form');
    Route::post('/login/owner', [\App\Http\Controllers\InecController::class, 'login'])->name('inec.login');


    Route::get('/dashboard', [\App\Http\Controllers\InecController::class, 'dashboard'])
        ->name('dashboard.inec')
        ->middleware('inec');

    Route::get('/all_inec', [\App\Http\Controllers\InecController::class, 'all_inec'])
        ->name('all.inec')
        ->middleware('inec');

    Route::get('/register_voter', [\App\Http\Controllers\InecController::class, 'register_voter'])
        ->name('register.voter')
        ->middleware('inec');

    Route::post('/register_voter', [\App\Http\Controllers\InecController::class, 'register_voter_post'])
        ->name('register.voter.post');

    Route::post('/search_nin', [\App\Http\Controllers\InecController::class, 'search_nin'])
        ->name('search.nin');

    Route::get('/show_record/{nin}', [\App\Http\Controllers\InecController::class, 'show_record'])
        ->name('show.record')
        ->middleware('inec');




//    Route::get('/all/inec', [\App\Http\Controllers\InecController::class, 'all_inec'])
//        ->name('all.inec')
//        ->middleware('inec');
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
