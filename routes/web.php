<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\Application\UserController;
use App\Http\Controllers\Application\WorkspaceController;
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

Route::get('/', WelcomeController::class)->name('home');

Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::middleware('setup')->group(function () {
        Route::get('/inicio', HomeController::class)->name('dashboard');
    });
    Route::post('/espacios-de-trabajo', [WorkspaceController::class,'store'])->name('workspaces.store');

    Route::prefix('configuraciones/personales')->name('settings.')->group(function () {
        Route::get('/perfil', [UserController::class,'profile'])->name('users.personal');
        Route::post('/perfil', [UserController::class,'updateProfile'])->name('users.personal.update');
        Route::get('/cuenta', [UserController::class,'account'])->name('users.profile');
    });
});


require __DIR__.'/auth.php';
