<?php

namespace App\Http\Controllers;

use App\Models\Titres;
use Illuminate\Http\Request;



class TitresController extends Controller
{


    public function listetitres()
    {
        $titres = Titres::get();
        return response()->json($titres);
    }
    public function listeTitresAlbums($id_album)
    {
        $titres = Titres::where("id_album", "=", $id_album)->get();
        return response()->json($titres);
    }
    public function listeTitresArtistes($pseudo)
    {
        $titres = Titres::where("pseudo", "=", $pseudo)->get();
        return response()->json($titres);
    }

    public function getTitreSpe($id_titre)
    {
        $titrespe = Titres::where("id_titre", "=", $id_titre)->get()->first();
        return response()->json($titrespe);
    }

    public function getTitreSpeAlb($id_album, $id_titre)
    {
        $titrespealb = Titres::where("id_album", "=", $id_album)->get()->first();
        $titrespealb = Titres::where("id_titre", "=", $id_titre)->get()->first();
        return response()->json($titrespealb);
    }

    public function ajoutTitres(Request $request, $pseudo, $id_album)
    {
        // $request->all();
        // $validator = Validator::make($request->all(), [
        //     // 'id' => ['required','numeric'],
        //     'nom' => ['required','alpha'],
        //     'qte' => ['required','integer']
        //     ]);

        //     if ($validator->fails()) {
        //         return $validator->errors();
        //     }

        $titres = new Titres;
        $titres->titre = $request->titre;
        $titres->pochette = $request->pochette;
        $titres->paroles = $request->paroles;
        $titres->lien = $request->lien;
        $titres->pseudo = $pseudo;
        $titres->id_album = $id_album;
        $ok = $titres->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Album ajouté"], 201);
        } else {
            return response()->json(["status" => 0, "message" => "pb lors de
    l'ajout"], 400);
        }
    }
    public function valideTitre(Request $request, $id_titre)
    {
        if ($titre = Titres::where("id_titre", "=", $id_titre)->first()) {
            $titre->valide = $request->valide;
            $ok = $titre->save();
            return response()->json($titre);
            if ($ok) {
                return response()->json(["status" => 1, "message" => "Profil modifié"], 204);
            } else {
                return response()->json(["status" => 0, "message" => "Pb modif"], 400);
            }
        } else {
            return response()->json(["status" => 0, "message" => "Prbl modif"], 400);
        }
    }

    public function changeTitre(Request $request, $id_titre)
    {


        if ($titres = Titres::where("id_titre", "=", $id_titre)->first()) {

            $titres->titre = $request->titre;
            $titres->paroles = $request->paroles;
            $titres->lien = $request->lien;
            $titres->pochette = $request->pochette;


            $ok = $titres->save();

            return response()->json($titres);
            if ($ok) {
                return response()->json(["status" => 1, "message" => "Titre modifié"], 204);
            } else {
                return response()->json(["status" => 0, "message" => "Pb modif"], 400);
            }
        } else {
            return response()->json(["status" => 0, "message" => "Prbl modif"], 400);
        }
    }
}
