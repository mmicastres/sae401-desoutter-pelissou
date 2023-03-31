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
}
}
