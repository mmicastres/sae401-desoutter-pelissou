<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use App\Models\Artistes;
use App\Models\Titres;

use Illuminate\Http\Request;

class RecherchesController extends Controller
{
    public function getResultRecherche(Request $request)
    {
        if($request->has('recherche')){
            $artistes = Artistes::where("pseudo", "=", $request->recherche)->get();
            $albums = Albums::where("titre","=",$request->recherche)->get();
            $titres = Titres::where("titre","=",$request->recherche)->get();
            $tab=[$artistes, $albums, $titres];
            return response()->json($tab);
        }
    }
}

