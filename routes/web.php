<?php

use Illuminate\Support\Facades\Gate;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')
    ->middleware([
        // check if the user is logged in
        'auth',
        // check if the user has the role "admin"
        'role:admin'
    ])
    ->group(function () {

        // check if the user has the admin role - Gate::check('accessAdministration')

        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');
    });



Route::get('/', \App\Http\Controllers\HomeController::class)
    ->name('home');
