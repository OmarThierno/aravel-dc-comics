<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class CestinoComicController extends Controller
{
    public function cestino() {
        $comics = Comic::onlyTrashed()->get();
        // dd($comics);
        return view('comics.cestino', compact('comics'));
    }
}
