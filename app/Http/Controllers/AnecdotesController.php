<?php

namespace App\Http\Controllers;
use App\Models\Anecdotes;

use Illuminate\Http\Request;

class AnecdotesController extends Controller
{
    public function getAnecdoteTitre($id_titre)
    {
        $anecdote = Anecdotes::find($id_titre);
        return response()->json($anecdote);
    }
    public function getAnecdotesValides(Request $request)
    {
        if($request->has('valide')==0){
            $anecdote = Anecdotes::where("valide", "=", $request->valide)->get();
            return response()->json($anecdote);
        }
    }

    public function ajoutAnecdotes(Request $request, $pseudo, $id_titre)
    {
        $anecdote = new Anecdotes;
        $anecdote->contenu = $request->contenu;
        $anecdote->pseudo = $pseudo;
        $anecdote->id_titre = $id_titre;
        $ok = $anecdote->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Anecdote ajoutée"],201);
        } 
        else {
            return response()->json(["status" => 0, "message" => "pb lors de
    l'ajout"],400);
        }
    }
}
