<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index()
    {
        return response()->json(Location::with('projects:id,name,description,slug,sdg')->get());
    }

    public function show($id)
    {
        return response()->json(Location::find($id));
    }
}
