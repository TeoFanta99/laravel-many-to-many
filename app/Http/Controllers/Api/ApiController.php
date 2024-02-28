<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class ApiController extends Controller 
{
    public function getTest() {

        return response() -> json([
            'status' => 'success',
            'message' => 'Se leggi questo messaggio, significa che è tutto ok'
        ]);
    }

    public function getTechnologies() {

        $technologies = Technology :: all();

        return response() -> json ([
            'status' => 'success',
            'technologies' => $technologies,
        ]);

    }

    public function createTech(Request $request) {

        $data = $request -> all();

        $tech = new Tech;
        $tech -> name = $data['name'];
        $tech -> image = $data['image'];

        $tech -> save();

        return response() -> json ([
            'status' => 'success',
            'data' => $tech,
        ]);

    }
}
