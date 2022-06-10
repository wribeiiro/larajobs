<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// All Listings
Route::get('/', [ListingController::class, 'index'])->name('/');

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth')->name('listings.create');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth')->name('listings.store');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth')->name('listings.edit');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth')->name('listings.update');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth')->name('listings.destroy');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth')->name('listings.manage');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('users.register');

// Create New User
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('users.logout');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('users.login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('users.authenticate');