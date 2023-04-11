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
        if ($request->has('valide')) {
            $commentaires = Commentaires::where("valide", "=", $request->valide)->get();
            return response()->json($commentaires);
        }
    }

    public function ajoutCommentaires(Request $request, $id_album,$pseudo)
    {
        $commentaires = new Commentaires;
        $commentaires->commentaire = $request->commentaire;
        $commentaires->note = $request->note;
        $commentaires->date_ajout_com = $request->date_ajout_com;
        $commentaires->id_album = $id_album;
        $commentaires->pseudo = $pseudo;
        $ok = $commentaires->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Commentaire ajouté"], 201);
        } else {
            return response()->json(["status" => 0, "message" => "pb lors de l'ajout"], 400);
        }
    }
}
