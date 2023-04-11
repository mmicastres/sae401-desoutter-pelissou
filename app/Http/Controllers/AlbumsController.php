<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{

    public function listeAlbumsCat($nom_categorie){
        $listeAlbumscat = Albums::where("nom_categorie","=",$nom_categorie)->get();
        return response()->json($listeAlbumscat); 
    }

    // public function listeAlbums(){
    //     $Albums = Albums::get();
    //     return response()->json($Albums);
    // }

    public function listeAccueil(){
        $Albums = Albums::orderBy('date_ajout', 'desc')->limit(3)->get();
        $Albums = Albums::where("valide", "=", 1)->get();
        return response()->json($Albums);
    }

    public function albumSpe($id){
        $Albums = Albums::where("id_album","=",$id)->get()->first();
        return response()->json($Albums);
    }
    public function getAlbumsNonValides(){
        
            $albums = Albums::where("valide", "=", 0)->get();
            return response()->json($albums);
        
    }

    public function ajoutAlbums(Request $request){
        // $request->all();
        // $validator = Validator::make($request->all(), [
    //     // 'id' => ['required','numeric'],
    //     'nom' => ['required','alpha'],
    //     'qte' => ['required','integer']
    //     ]);

    //     if ($validator->fails()) {
    //         return $validator->errors();
    //     }
    
    $albums = new Albums;
    $albums->nom = $request->nom;
    $albums->pochette = $request->pochette;
    $albums->paroles = $request->paroles;
    $ok = $albums->save();
    if ($ok) {
        return response()->json(["status" => 1, "message" => "Album ajouté"],201);
    } 
    else {
        return response()->json(["status" => 0, "message" => "pb lors de
l'ajout"],400);
    }

}

}