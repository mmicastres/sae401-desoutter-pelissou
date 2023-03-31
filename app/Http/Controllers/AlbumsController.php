<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function listeAlbums(){
        $Albums = Albums::get();
        return response()->json($Albums);
    }
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
