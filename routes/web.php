<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::get("/search", [SearchController::class, '__invoke']);
Route::get("/tag/{tag:name}", [TagController::class, '__invoke']);


Route::middleware('guest')->group(function () {
    Route::get("/register", [RegisteredUserController::class, 'create']);
    Route::post("/register", [RegisteredUserController::class, 'store']);

    Route::get("/login", [SessionController::class, 'create']);
    Route::post("/login", [SessionController::class, 'store']);
});




Route::delete("/logout", [SessionController::class, 'destroy'])->middleware('auth');
