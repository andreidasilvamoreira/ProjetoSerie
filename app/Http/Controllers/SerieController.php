<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function find($id) {
        $serie = Serie::find($id);

        if (!$serie) {
           return response()->json(['message' => 'serie não encontrada']);
        }
    }
}