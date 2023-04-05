<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;

class UtilisateursController extends Controller
{
    class UtilisateursController extends Controller
{
    public function getSpeUtili($pseudo){
        $Utilisateur = Utilisateurs::where("pseudo","=",$pseudo)->get();
        return response()->json($Utilisateur);
    }
    public function getUtilisateursBan(Request $request)
    {
        if($request->has('banni')){
            $utilisateurs = Utilisateurs::where("banni", "=", $request->banni)->get();
            return response()->json($utilisateurs);
        }
    }

    public function changeUtili(Request $request){
        // $request->all();
        // $validator =  Validator::make($request->all(), [
        //     'id' => ['required','integer'],
        //     'nom' => ['required','alpha'],
        //     'qte' => ['required','integer']
        //     ]);

        //     if ($validator->fails()) {
        //         return $validator->errors();
        //     }

        if($utilisateur = Utilisateur::find($request->id)){
            $utilisateur->mdp = $request->mdp;
            $utilisateur->pp = $request->pp;
            $ok = $utilisateur->save();
            return response()->json($utilisateur);
            if ($ok) {
                return response()->json(["status" => 1, "message" => "Profil modifié"], 204);
            } else {
                return response()->json(["status" => 0, "message" => "Pb modif"],400);
            }
        }
        else{
            return response()->json(["status" => 0, "message" => "Prbl modif"],400);
            }
    } 
}
public function ajoutUtili(Request $request)
    {
        $utilisateur = new Utilisateurs;
        $utilisateur->pseudo = $request->pseudo;
        $utilisateur->mail = $request->mail;
        $utilisateur->mdp = $request->mdp;
        $ok = $utilisateur->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Utilisateur ajoutée"],201);
        } 
        else {
            return response()->json(["status" => 0, "message" => "pb lors de
    l'ajout"],400);
        }
    }
}
