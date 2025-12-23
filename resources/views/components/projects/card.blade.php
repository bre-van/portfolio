@props([
    'project',
])

<div class="flex-col bg-primary rounded-xl">
    <div class="relative aspect-[16/10] overflow-hidden">
        <img
            src="https://placehold.co/600x400"
            alt="{{ $project->title }}"
            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105 rounded-t-xl"
        />
    </div>

    <div class="p-5 space-y-3">
        <h3 class="text-lg font-semibold text-black leading-tight">
            {{ $project->title }}
        </h3>

        <p class="text-sm text-gray-900 line-clamp-2">
            {{ $project->summary }}
        </p>

        <div class="flex flex-wrap gap-2 pt-2">
            @foreach ($project->skills as $skill)
                <x-skills.tag :skill="$skill" />
            @endforeach
        </div>
    </div>
</div>
