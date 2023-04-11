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
// Route::get('/albums', [App\Http\Controllers\AlbumsController::class, 'listeAlbums']);
Route::get('/accueil', [App\Http\Controllers\AlbumsController::class, 'listeAccueil']);
Route::post('/albums', [App\Http\Controllers\AlbumsController::class, 'ajoutAlbums']);
Route::get('/albums/{id_album}', [App\Http\Controllers\AlbumsController::class, 'albumSpe']);
Route::get('/categories/{nom_categorie}/albums', [App\Http\Controllers\CategoriesController::class, 'listeAlbumsCat']);
Route::get('/artistes/{pseudo}/albums', [App\Http\Controllers\ArtistesController::class, 'listeAlbumsArtistes']);

// Singles
Route::get('/titres', [App\Http\Controllers\TitresController::class, 'listetitres']);
Route::get('/albums/{id_album}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresAlbums']);
Route::get('/titres/{id_titre}', [App\Http\Controllers\TitresController::class, 'getTitreSpe']);
Route::get('albums/{id_album}/titres/{id_titre}', [App\Http\Controllers\TitresController::class, 'getTitreSpeAlb']);
Route::get('/artistes/{pseudo}/titres', [App\Http\Controllers\TitresController::class, 'listeTitresArtistes']);
Route::post('/artistes/{pseudo}/albums/{id_album}/titres', [App\Http\Controllers\TitresController::class, 'ajoutTitres']);

// Anecdotes
Route::get('/titre/{id_titre}/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'getAnecdoteTitre']);
Route::get('/anecdote', [App\Http\Controllers\AnecdotesController::class, 'getAnecdotesValides']);
Route::post('/artiste/{pseudo}/titres/{id_titres/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'ajoutAnecdote']);
Route::put('/admins/anecdote?valide=0/{idanecdote}', [App\Http\Controllers\UtilisateursController::class, 'changeUtili']);
// Route::post('/artiste/{pseudo}/titres/{id_titre}/anecdotes', [App\Http\Controllers\AnecdotesController::class, 'ajoutAnecdotes']);

// Categories
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'listeCategories']);
Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'ajoutCategories']);
// Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'ajoutCategories']);

//User 
Route::get('/utilisateurs/{pseudo}', [App\Http\Controllers\UtilisateursController::class, 'getSpeUtili']);
Route::get('/utilisateurs', [App\Http\Controllers\UtilisateursController::class, 'getUtilisateursBan']);
Route::post('/utilisateurs', [App\Http\Controllers\UtilisateursController::class, 'ajoutUtili']);
Route::post('/connexion', [App\Http\Controllers\UtilisateursController::class, 'recupUtili']);
Route::put('/utilisateurs/{pseudo}', [App\Http\Controllers\UtilisateursController::class, 'changeUtili']);

// Commentaires

Route::get('/utilisateurs/{pseudo}/commentaires', [App\Http\Controllers\CommentairesController::class, 'getCommentairesUtili']);
Route::get('/albums/{id_album}/commentaires', [App\Http\Controllers\CommentairesController::class, 'getCommentairesAlbums']);
Route::get('commentaires', [App\Http\Controllers\CommentairesController::class, 'getComValide']);
Route::post('albums/{id_album}/commentaires/{pseudo}', [App\Http\Controllers\CommentairesController::class, 'ajoutCommentaires']);

// Search

Route::get('/recherche', [App\Http\Controllers\RecherchesController::class, 'getResultRecherche']);


// Admin

Route::get('/admin/albums', [App\Http\Controllers\AlbumsController::class, 'getAlbumsNonValides'],);
Route::delete('/admin/categories/{nom_categorie}', [App\Http\Controllers\CategoriesController::class, 'deleteCategories']);
Route::put('admin/anecdote', [App\Http\Controllers\AnecdotesController::class, 'valideAnecdote']);