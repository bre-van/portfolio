@props([
    'project',
])

<div class="flex flex-row project-card bg-primary-dark border border-gray-950 hover:border-gray-800 cursor-pointer group transition-colors duration-500">
    <div class="relative aspect-16/10 overflow-hidden">
        <img
            src="{{ $project->image }}"
            alt="{{ $project->title }}"
            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
        />
    </div>

    <div class="flex flex-1 flex-row">
        <div class="flex flex-col justify-between flex-1 border-top border-b-neutral-800  p-5">
            <div>
                <h4 class="text-neutral-500">
                    {{ $project->type }}
                </h4>
                <h3 class="text-lg font-semibold eading-tight group-hover:text-primary">
                    {{ $project->title }}
                </h3>
            </div>

            <div class="flex flex-wrap gap-2 pt-2">
                @foreach ($project->skills as $skill)
                    <x-skills.tag :skill="$skill"/>
                @endforeach
            </div>
        </div>

        <div class="p-5">
            <div class="text-primary group-hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="transition-all duration-500 size-5 group-hover:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                </svg>
            </div>
        </div>
    </div>
</div>
