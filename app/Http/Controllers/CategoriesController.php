<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function listeAlbumsCat($nom_categorie){
        $listeAlbumscat = Albums::where("nom_categorie","=",$nom_categorie)->get();
        return response()->json($listeAlbumscat); 
    }

    public function listeCategories()
    {
        $categories = Titres::get();
        return response()->json($categories);
    }
}
