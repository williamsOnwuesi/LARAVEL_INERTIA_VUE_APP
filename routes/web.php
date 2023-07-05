<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueProfileController;
use Inertia\Inertia;

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

    $date = "06-10-2023";

    return Inertia::render("Home", ["date" => $date]);

});

Route::get('profile', function () { 

    return Inertia::render("Profile");

});

Route::resource('create_user', VueProfileController::class);