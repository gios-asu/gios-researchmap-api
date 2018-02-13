<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class GoalController extends Controller
{

    public function index()
    {
        return response()->json(Goal::with([
    		'projects:projects.id,name,description,slug,sdg'
        ])->get());
    }

    public function show($id)
    {
        return response()->json(Goal::find($id));
    }
}
