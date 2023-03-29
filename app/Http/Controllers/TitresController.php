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
}
