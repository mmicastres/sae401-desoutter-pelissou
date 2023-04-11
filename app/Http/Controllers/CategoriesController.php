<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function listeCategories()
    {
        $categories = Categories::get();
        return response()->json($categories);
    }
    public function ajoutCategories(Request $request)
    {
        $categorie = new Categories;
        $categorie->nom_categorie = $request->nom_categorie;
        $ok = $categorie->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Catégorie ajoutée"],201);
        } 
        else {
            return response()->json(["status" => 0, "message" => "pb lors de
    l'ajout"],400);
        }
    }

    public function deleteCategories($nom_categorie){
        $categorie = Categories::where("nom_categorie","LIKE",$nom_categorie);
        $categorie->delete();
    }
}
