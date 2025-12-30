<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\JobPosition;

class IndexController extends Controller
{
    public function index()
    {
        $jobPositions = JobPosition::with(['company', 'projects.skills'])
            ->orderBy('current', 'desc')
            ->orderBy('end_date', 'desc')
            ->get();

        $educations = Education::query()
            ->orderBy('end_date', 'desc')
            ->get();

        return view('pages.home', ['jobPositions' => $jobPositions, 'educations' => $educations]);
    }
}
