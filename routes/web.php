<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::view('/cecep', 'welcome');

Route::get('/', [PostController::class, 'index']);

Route::view ('bagus' , 'cecep');


