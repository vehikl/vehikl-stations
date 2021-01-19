<?php

namespace App\Http\Controllers;

use App\Models\Station;

class StationsController extends Controller
{
    public function index()
    {
        return Station::all();
    }
}
