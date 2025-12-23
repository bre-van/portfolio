@props(['job'])

<span
    class="absolute -start-1.5 mt-2 flex h-3 w-3 rounded-full bg-amber-400 ring-4 ring-black"></span>

<div class="flex flex-col gap-2 sm:flex-row sm:items-baseline sm:justify-between">
    <div>
        <h3 class="text-lg font-semibold text-white">
            {{ $job->name }}
            <span class="text-neutral-400 font-normal">— {{ $job->company->name }}</span>
        </h3>

        <p class="text-sm text-neutral-400">
            {{ $job->location ?? '—' }}
        </p>
    </div>

    <div class="text-sm text-neutral-400">
        <span
            class="inline-flex items-center rounded-full border border-neutral-800 bg-neutral-900 px-3 py-1">
            {{ $job->start_date }} — {{ $job->end_date ?? 'heden' }}
        </span>
    </div>
</div>

@if(!empty($job->description))
    <p class="mt-4 text-neutral-300 leading-relaxed">
        {{ $job->description }}
    </p>
@endif

@php
    $skillset = [];
@endphp

@if($job->projects?->count())
    <ul class="mt-4 space-y-2 text-neutral-300">
        @foreach ($job->projects as $project)
            <li class="flex gap-3">
                <span class="mt-2 h-1.5 w-1.5 rounded-full bg-neutral-500"></span>
                <span>
                                                    {{ $project->title }}
                                                </span>
            </li>

            @php
                foreach ($project->skills as $skill) {
                    $skillset[$skill->id] = $skill;
                }
            @endphp
        @endforeach
    </ul>
@endif

@if(count($skillset))
    <div class="mt-5 flex flex-wrap gap-2">
        @foreach ($skillset as $skill)
            <x-skills.tag :skill="$skill"/>
        @endforeach
    </div>
@endif
