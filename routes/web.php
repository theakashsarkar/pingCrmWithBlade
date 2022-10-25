<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/organization', [\App\Http\Controllers\OrganizationsController::class, 'index'])->middleware(['auth', 'verified'])->name('organizations');

Route::get('/organization/create', [\App\Http\Controllers\OrganizationsController::class, 'index'])->middleware(['auth', 'verified'])->name('create');
Route::POST('/organization/store', [\App\Http\Controllers\OrganizationsController::class, 'addCustomer'])->middleware(['auth', 'verified'])->name('organization/store');
Route::get('/organization/edit/{id}', [\App\Http\Controllers\OrganizationsController::class, 'editData']);
Route::post('edit',[\App\Http\Controllers\OrganizationsController::class, 'update'])->name('update');


require __DIR__.'/auth.php';
