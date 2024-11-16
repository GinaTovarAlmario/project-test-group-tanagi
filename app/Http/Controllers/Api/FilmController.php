<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return response()->json(
            [
                "success" => true,
                "results" => $films,
            ]
        );
    }
}
