<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\JobPosition;

class IndexController extends Controller
{
    public function index()
    {
        $jobPositions = JobPosition::with(['company', 'projects.skills'])->get();
        $educations = Education::get();

        return view('pages.home', ['jobPositions' => $jobPositions, 'educations' => $educations]);
    }
}
