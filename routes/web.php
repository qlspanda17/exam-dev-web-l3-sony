<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/salut', [EventController::class, 'base']);
Route::post('/salut', [EventController::class, 'store']);
Route::put('/edit', [EventController::class, 'update']);
Route::delete('/supression', [EventController::class, 'supprimer']);


