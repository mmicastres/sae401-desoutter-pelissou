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
}
