<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTest() {

        return response() -> json([
            'status' => 'success',
            'message' => 'Se leggi questo messaggio, significa che è tutto ok'
        ]);
    }
}
