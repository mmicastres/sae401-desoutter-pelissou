<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use App\Models\Anecdotes;
use App\Models\Titres;
use App\Models\Commentaires;

use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function deleteAlbum(Request $request)
    {
        $commentaires = Commentaires::where("id_album", "=", $request->id_album)->delete();
        $titres = Titres::where("id_album", "=", $request->id_album)->get();
        foreach ($titres as $titre){
            $anecdotes = Anecdotes::where("id_titre", "=", $titre->id_titre)->delete();
        }
        // $anecdotes = Anecdotes::where("id_titre", "=", $titres[0]->id_titre)->delete();
        $titres = Titres::where("id_album", "=", $request->id_album)->delete();
        $albums = Albums::where("id_album", "=", $request->id_album)->delete();
        $tab = [$commentaires, $albums, $titres, $anecdotes];
        return response()->json($tab);
    }
}
