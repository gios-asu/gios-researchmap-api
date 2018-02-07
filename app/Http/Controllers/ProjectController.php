<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return response()->json(Project::with('locations')->get());
    }

    public function show($id)
    {
        return response()->json(Project::find($id));
    }
}
