<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List of all the API routes
Route::get('/albums', [App\Http\Controllers\AlbumsController::class, 'listeAlbums']);
Route::get('/titres', [App\Http\Controllers\TitresController::class, 'listetitres']);

Route::get('albums/{id_album}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresAlbums']);

Route::get('artistes/{pseudo}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresArtistes']);

Route::get('titre/{id_titre}/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'getAnecdoteTitre']);

Route::get('anecdote?valide=0', [App\Http\Controllers\AnecdotesController::class, 'getAnecdotesValides']);

Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'listeCategories']);
