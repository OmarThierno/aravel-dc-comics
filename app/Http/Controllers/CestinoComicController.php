<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use WeakMap;

class CestinoComicController extends Controller
{
    public function index() {
        $comics = Comic::onlyTrashed()->get();
        // dd($comics);
        return view('comics.basket.index', compact('comics'));
    }

    public function restoration(string $id) {
        // $comic = Comic::withTrashed()->find($id);
        $comic = Comic::onlyTrashed()->where('id', $id);
        $comic->restore();
        return redirect()->route('cestino');
    }

    public function delete(string $id) {
        $comic = Comic::onlyTrashed()->where('id', $id);
        $comic->forceDelete();
        return redirect()->route('cestino');
    }
}
