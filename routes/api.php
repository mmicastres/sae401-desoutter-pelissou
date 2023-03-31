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

Route::get('albums/titres/{id_titre}', [App\Http\Controllers\TitresController::class, 'listeTitresAlbums']);

Route::get('artiste/{idartiste}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresArtistes']);
