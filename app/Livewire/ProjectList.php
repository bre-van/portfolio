<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{
    use WithPagination;

    public int $pageSize = 6;
    public int $limit = 6;
    public bool $showMoreButton = true;
    public array $selectedSkills = [];

    protected $queryString = [
    ];

    public function showMore(): void
    {
        $this->limit += $this->pageSize;
        $this->resetPage();
    }

    public function render()
    {
        $total = Project::count();

        $projects = Project::query()
            ->with('skills')
            ->latest()
            ->limit($this->limit);

        if ($total > $this->limit) {
            $projects = $projects->limit($this->limit);
        }else{
            $this->showMoreButton = false;
        }

        $projects = $projects->get();

        return view('livewire.projects.list', [
            'projects' => $projects
        ]);
    }
}
