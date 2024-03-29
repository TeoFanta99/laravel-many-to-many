<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiController; 

Route :: group(['prefix' => '/v1'], function() {
    Route :: get('test', [ApiController :: class, 'getTest']);
    Route :: get('technology', [ApiController :: class, 'getTechnologies']);
    Route :: post('technology', [ApiController :: class, 'createTech']);
});