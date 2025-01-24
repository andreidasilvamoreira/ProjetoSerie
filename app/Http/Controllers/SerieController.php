<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function find($id)
    {
        $serie = Serie::with('usuarios')->find($id);

        if (!$serie) {
           return response()->json(['message' => 'serie não encontrada'],404);
        }
        
        return response()->json($serie, 200);
    }

    public function findAll()
    {
        $series = Serie::with('usuarios')->get();
        
        return response()->json($series);
    }
}