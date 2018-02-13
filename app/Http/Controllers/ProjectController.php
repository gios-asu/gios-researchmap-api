<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return response()->json(Project::with([
        		'locations:locations.id,iso,name,size,latitude,longitude,zoom',
        		'goals:id,name,description,is_primary,order'
        ])->get());
    }

    public function show($id)
    {
        return response()->json(Project::find($id));
    }
}
