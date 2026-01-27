<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\JobPosition;
use App\Models\Skill;

class IndexController extends Controller
{
    public function index()
    {
        $jobPositions = JobPosition::with([
            'company',
            'projects.skills',
        ])
            ->orderBy('current', 'desc')
            ->orderBy('end_date', 'desc')
            ->get();

        $educations = Education::query()
            ->orderBy('end_date', 'desc')
            ->get();

        $sklls = Skill::orderBy('name')->get();

        return view('pages.home', [
            'jobPositions' => $jobPositions,
            'educations' => $educations,
            'skills' => $sklls,
        ]);
    }
}
