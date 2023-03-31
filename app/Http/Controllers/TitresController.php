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
}
