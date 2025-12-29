<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\JobPosition;
use Livewire\Component;

class CarreerList extends Component
{
    public function render()
    {
        $jobPositions = JobPosition::with(['company', 'projects.skills'])->get();
        $educations = Education::get();

        return view('livewire.career.list', ['jobPositions' => $jobPositions, 'educations' => $educations]);
    }
}
