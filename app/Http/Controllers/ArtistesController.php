<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistesController extends Controller
{
    public function listeAlbumsArtistes($pseudo){
        $listeAlbumsart = Albums::where("pseudo","=",$pseudo)->get();
        return response()->json($listeAlbumsart); 
    }
}
