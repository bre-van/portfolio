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

    <button
        @click="close()"
        class="text-neutral-400 hover:text-neutral-600 md:text-4xl z-52 absolute top-2 right-2 md:top-5 md:right-5"
    >
        ✕
    </button>

    <!-- Modal -->
    <div
        x-transition.scale
        class="flex flex-col relative z-10 w-full max-w-[80vw] lg:max-w-4xl bg-primary-dark shadow-xl max-h-[90vh]"
    >
        <div class="mb-4">
            <img
                src="{{ asset('images/projects') }}/{{ $project->image }}"
                alt="{{ $project->title }}"
                class="w-full h-40 md:h-64 object-cover"
            >
        </div>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between px-6">
            <h2 class="text-2xl font-semibold">
                {{ $project->title }}
            </h2>
            <h3 class="text-sm text-gray-500">
                @if($project->finished_at)
                    Afgewerkt: {{ $project->finishedDate() }}
                @endif
            </h3>
        </div>

        <h4 class="text-lg mb-4 text-gray-400 px-6">
            {{ $project->type }}
        </h4>

        <div class="prose max-w-none flex-1 overflow-y-auto px-6">
            {!! nl2br($project->description) !!}

            @if ($project->jobPosition)
                <p class="mt-5 mb-2 text-gray-400">
                    Gerealiseerd bij: {{ $project->jobPosition->company->name }} ({{ $project->jobPosition->name }})
                </p>
            @endif

        </div>

        @if ($project->url)
            <div class="mt-5 px-6">
                <a href="{{ $project->url }}" target="_blank" class="text-primary hover:underline">
                    Bezoek de website
                </a>
            </div>
        @endif
        <div class="flex flex-wrap gap-2 mt-5 p-6">
            @foreach ($project->skills as $skill)
                <x-skills.tag :skill="$skill"/>
            @endforeach
        </div>
    </div>
</div>
