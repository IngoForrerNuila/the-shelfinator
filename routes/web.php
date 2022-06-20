<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

// Route::get('/index', function () {
//     return view('home');
// });

Route::get('/index', [MessageController::class, 'showAll']);

Route::get('/details/{id}', [MessageController::class, 'movieDetails']);


// Route::get('/details/{id}', function () {
//     return view('details');
// });

// Route::post('/details/{id}/create', [MessageController::class, 'create'])->name('create');


// Route::get('/message/{id}', [MessageController::class, 'editData']);

//                     /////////////////////////

// Route::delete('/message/{id}', [MessageController::class, 'delete']);


// // Route::post('/edit', [MessageController::class, 'update']);

// Route::post('/update/{id}', [MessageController::class, 'update']);

