<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaires;
use App\Models\Utilisateurs;
use App\Models\Albums;

class CommentairesController extends Controller
{
    public function getCommentairesUtili($pseudo)
    {
        $listeCommUtili = Commentaires::where("pseudo", "=", $pseudo)->get();
        return response()->json($listeCommUtili);
    }


    public function getCommentairesAlbums($id_album)
    {
        $listeCommAlbums = Commentaires::where("id_album", "=", $id_album)->get();
        return response()->json($listeCommAlbums);
    }

    public function getComValide(Request $request)
    {
        if($request->has('valide')){
            $commentaires = Commentaires::where("valide", "=", $request->valide)->get();
            return response()->json($commentaires);
        }
    }
}
