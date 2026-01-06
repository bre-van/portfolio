<div
    x-data="{
        open: true,
        close() {
            this.open = false
            setTimeout(() => {
                $wire.closeModal()
            }, 200)
        }
    }"
    x-show="open"
    x-cloak
    x-transition.opacity
    @keydown.escape.window="close()"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/90"
>
    <!-- Backdrop -->
    <div class="absolute inset-0" @click="close()"></div>


    <!-- Modal -->
    <div
        x-transition.scale
        class="flex flex-col relative z-10 bg-primary-dark shadow-xl max-w-[90vw] lg:max-w-4xl max-h-[90vh]"
    >
        <button
            @click="close()"
            class="text-gray-800 hover:text-gray-700 text-xl z-52 absolute top-0 right-0 py-1 px-2 bg-primary hover:bg-primary/80 opacity-90 cursor-pointer"
        >
            ✕
        </button>
        <div class="mb-4">
            <x-image webp="projects/webp/{{$project->webpImage()}}" image="projects/{{$project->image}}"
                     width="900"
                     height="400"
                     class="w-full object-cover object-top"
                     alt="{{ $project->title }}" />
        </div>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between px-6">
            <h2 class="text-2xl font-semibold">
                {{ $project->title }}
            </h2>
        </div>

        <h4 class="text-lg mb-4 text-gray-400 px-6">
            {{ $project->type }}
        </h4>

        <div class="max-w-none flex-1 overflow-y-auto px-6 project-content">
            <div class="space-y-3 text-neutral-300 leading-relaxed mb-5">
                {!! $project->description !!}
            </div>

            @if ($project->jobPosition)
                <p class="text-gray-400">
                    Gerealiseerd bij: {{ $project->jobPosition->company->name }} ({{ $project->jobPosition->name }})
                </p>
            @endif

            @if($project->finished_at)
                <p class="text-gray-400">
                    Afgewerkt: {{ $project->finishedDate() }}
                </p>
            @endif

            @if ($project->url)
                <div class="mt-5">
                    <a href="{{ $project->url }}" target="_blank" class="text-primary hover:underline">
                        Bezoek de website
                    </a>
                </div>
            @endif
        </div>
        <div class="flex flex-wrap gap-2 p-6">
            @foreach ($project->skills as $skill)
                <x-skills.tag :skill="$skill"/>
            @endforeach
        </div>
    </div>
</div>
