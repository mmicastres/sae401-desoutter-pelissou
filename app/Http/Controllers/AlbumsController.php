<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function listeAlbums(){
        $Albums = Albums::get();
        return response()->json($Albums);
    }
}
