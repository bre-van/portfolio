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
    public ?int $selectedProjectId = null;

    protected $queryString = [
    ];

    public function showMore(): void
    {
        $this->limit += $this->pageSize;
        $this->resetPage();
    }

    public function selectProject(int $projectId): void
    {
        $this->selectedProjectId = $projectId;
    }

    public function closeModal(): void
    {
        $this->selectedProjectId = null;
    }

    public function render()
    {
        $total = Project::count();

        $projects = Project::query()
            ->with('skills')
            ->orderBy('featured', 'desc')
            ->orderBy('started_at', 'desc');

        if ($total > $this->limit) {
            $projects = $projects->limit($this->limit);
        }else{
            $this->showMoreButton = false;
        }

        $projects = $projects->get();

        $selectedProject = $this->selectedProjectId
            ? Project::with('skills')
                ->with('jobPosition')
                ->with('jobPosition.company')
                ->find($this->selectedProjectId)
            : null;

        return view('livewire.projects.list', [
            'projects' => $projects,
            'selectedProject' => $selectedProject
        ]);
    }
}
