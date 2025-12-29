<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\JobPosition;

abstract class Controller
{
    public function index()
    {
        $jobPositions = JobPosition::with(['company', 'projects.skills'])->get();
        $educations = Education::get();

        return view('career.index', ['jobPositions' => $jobPositions, 'educations' => $educations]);
    }
}
