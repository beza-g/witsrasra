<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Pest\Arch\Support\UserDefinedFunctions;

// Show home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'createUser'])->middleware('guest')->name('register');

//To create a user
Route::post('/users', [UserController::class, 'store'])->name('user');

//Logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//Go to Login page
Route::get('login', [UserController::class, 'login'])->name('login');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

//To show "post listing" page
Route::get('/createListing', [UserController::class, 'createListing'])->middleware('auth')->name('list-job');

// To show edit listing page
Route::get('/{jobListing}/edit', [UserController::class, 'edit'])->middleware('auth')->name('edit');

//To store a listing in database
Route::post('/', [HomeController::class, 'store']);

//Go to the Application form
Route::get('/listings/{listing}/apply', [ApplicationController::class, 'index'])->name('application_form');

//Submitt Application form
Route::post('/listing/{listing}/apply/submit', [ApplicationController::class, 'store'])->name('submit_application');

//ShowSubmitted Application forms
Route::get('/applications/{id}', [ApplicationController::class, 'showApplication'])->middleware('auth')->name('showApplication');

// Update edited listing
Route::put('{jobListing}', [UserController::class, 'update'])->name('storeEdit');

Route::get('/listings/{listing}', [UserController::class, 'destroy'])->name('destroy_listing');

//To show single listing...keep at the bottom
Route::get('/job_listing/{id}', [HomeController::class, 'show'])->name('see_job_description');
