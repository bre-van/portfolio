<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __invoke(Project $project)
    {
        return view('projects.details', ['project' => $project]);
    }

    public function index()
    {
        $projects = Project::with('skills')->get();
        return view('projects.index', ['projects' => $projects]);
    }
}
