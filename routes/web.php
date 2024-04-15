<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractiesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('', function () {
    return view('Home');
});

Route::get('/attracties', [AttractiesController::class, 'index']);

Route::get('/contact', function () {
    return view('Contact');
});

Route::post('/contact/insert', [ContactController::class, 'store']);

Route::get('/openingstijden', function () {
    return view('Openingstijden');
});

Route::get('/tickets', function () {
    return view('Tickets');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});