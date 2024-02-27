<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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

        $img = $request -> file('image');
        $img_path = Storage :: disk('public') -> put('images', $img);

        $newType = new Type ();

        $newType -> name = $data['name'];
        $newType -> image = $img_path;

        $newType -> save();

        return redirect() -> route('type.show', $newType -> id);
    }

    public function edit ($id) {

        $type = Type :: find($id); 
        return view ('pages.edit', compact('type'));
    }

    public function update ($request, $id) {

        $type = Type :: find($id); 

        $data = $request -> all();

        $img = $request -> file('image');
        $img_path = Storage :: disk('public') -> put('images', $img);

        $type -> name = $data['name'];
        $type -> image = $img_path;

        $type -> save();

        return redirect() -> route ('type.show', $type -> id);

    }
}
