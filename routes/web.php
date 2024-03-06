<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;

use App\Http\Controllers\PigController;
use App\Http\Controllers\FishController;


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
    return view('welcome');
});

// Route::get('/to_hello', function () {
//     return view('hello');
// });


Route::get('/hello', function () {
    // return view('hello');
    
});

// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/hello', [CatController::class, 'hello']);
Route::get('/test', [CatController::class, 'testAction']);

Route::get('/dog_run', [DogController::class, 'run']);

// pig
Route::resource('pigs', PigController::class);
Route::get('/pigs_excel', [PigController::class, 'excel']);

// fish 
Route::resource('fishes', FishController::class);



