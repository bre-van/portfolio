@props([
    'project',
])

<div
    class="flex flex-col md:flex-row project-card bg-primary-dark border border-gray-950 hover:border-primary/50 cursor-pointer group transition-all duration-500 rounded-xl overflow-hidden shadow-lg hover:shadow-primary/5">
    <div class="relative aspect-16/10 overflow-hidden md:w-72 shrink-0">
        <x-image webp="projects/webp/{{$project->webpImage()}}" image="projects/{{$project->image}}"
                 width="900"
                 height="400"
                 class="h-full w-full object-cover object-top transition-transform duration-700 group-hover:scale-110"
                 alt="{{ $project->title }}" />
        <div class="absolute inset-0 bg-linear-to-t from-primary-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    </div>

    <div class="flex flex-1 flex-row">
        <div class="flex flex-col justify-between flex-1 p-6">
            <div>
                <h4 class="text-primary/70 text-xs font-bold uppercase tracking-widest mb-1 group-hover:text-primary transition-colors">
                    {{ $project->type }}
                </h4>
                <h3 class="text-xl font-bold leading-tight text-white group-hover:text-primary transition-colors">
                    {{ $project->title }}
                </h3>
            </div>

            <div class="flex flex-wrap gap-1.5 pt-4">
                @foreach ($project->skills->take(4) as $skill)
                    <span class="text-[10px] px-2 py-0.5 rounded-md bg-gray-900 text-gray-400 group-hover:bg-gray-800 group-hover:text-gray-300 transition-colors uppercase font-medium">
                        {{ $skill->name }}
                    </span>
                @endforeach
                @if($project->skills->count() > 4)
                    <span class="text-[10px] px-2 py-0.5 rounded-md bg-gray-900 text-gray-500 uppercase font-medium">
                        +{{ $project->skills->count() - 4 }}
                    </span>
                @endif
            </div>
        </div>

        <div class="flex items-center pr-6 py-6">
            <div class="text-gray-700 group-hover:text-primary transition-all duration-500 transform group-hover:translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="transition-all duration-500 size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                </svg>
            </div>
        </div>
    </div>
</div>
