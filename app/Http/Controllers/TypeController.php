<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;


class TypeController extends Controller
{
    public function index() {

        $types = Type :: all();

        return view ('pages.index', compact('types'));
    }

    public function show ($id) {

        $type = Type :: find($id);

        return view ('pages.show', compact('type'));
    }

    public function create () {

        return view ('pages.create');
    }

    public function store (Request $request) {

        $data = $request -> all();

        $newType = new Type ();

        $newType -> name = $data['name'];

        $newType -> save();

        return redirect() -> route('type.show', $newType -> id);
    }
}
