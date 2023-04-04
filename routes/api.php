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

// Albums
Route::get('/albums', [App\Http\Controllers\AlbumsController::class, 'listeAlbums']);
Route::post('/albums', [App\Http\Controllers\AlbumsController::class, 'ajoutAlbums']);
Route::get('/albums', [App\Http\Controllers\AlbumsController::class, 'listeAccueil']);
Route::get('/albums/{id_album}', [App\Http\Controllers\AlbumsController::class, 'albumSpe']);
Route::get('/categories/{nom_categorie}/albums', [App\Http\Controllers\CategoriesController::class, 'listeAlbumsCat']);
Route::get('artistes/{pseudo}/albums', [App\Http\Controllers\ArtistesController::class, 'listeAlbumsArtistes']);
Route::get('albums', [App\Http\Controllers\AlbumsController::class, 'getAlbumsValides']);

// Titres
Route::get('/titres', [App\Http\Controllers\TitresController::class, 'listetitres']);
Route::get('/albums/{id_album}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresAlbums']);
Route::get('/artistes/{pseudo}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresArtistes']);
Route::post('/artistes/{pseudo}/albums/{id_album}/titres', [App\Http\Controllers\TitresController::class, 'ajoutTitres']);

// Anecdotes
Route::get('/titre/{id_titre}/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'getAnecdoteTitre']);
Route::get('/anecdote?valide=0', [App\Http\Controllers\AnecdotesController::class, 'getAnecdotesValides']);
Route::post('/artiste/{pseudo}/titres/{id_titre}/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'ajoutAnecdotes']);
Route::put('/admins/anecdote?valide=0/{idanecdote}', [App\Http\Controllers\UtilisateursController::class, 'changeUtili']);

// Categories
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'listeCategories']);
Route::post('/categories', [App\Http\Controllers\CategoriesController::class,'ajoutCategories']);
Route::post('/artiste/{pseudo}/titres/{id_titres/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'ajoutAnecdote'])
// Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'ajoutCategories']);

//User 
Route::get('/utilisateurs/{pseudo}', [App\Http\Controllers\UtilisateursController::class, 'getSpeUtili']);
Route::get('/utilisateurs', [App\Http\Controllers\UtilisateursController::class, 'getUtilisateursBan']);
Route::put('/utilisateurs', [App\Http\Controllers\UtilisateursController::class, 'changeUtili']);

// A trier

