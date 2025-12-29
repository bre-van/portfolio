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
        class="text-neutral-400 hover:text-neutral-600 text-4xl absolute top-10 right-10"
    >
        ✕
    </button>

    <!-- Modal -->
    <div
        x-transition.scale
        class="relative z-10 w-full max-w-4xl bg-primary-dark p-6 shadow-xl"
    >
        <div class="mb-4">
            <img
                src="{{ $project->image }}"
                alt="{{ $project->title }}"
                class="w-full h-64 object-cover rounded-lg"
            >
        </div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-semibold">
                {{ $project->title }}
            </h2>
            <h3 class="text-sm text-gray-500">
                @if($project->finished_at)
                    Afgewerkt: {{ $project->finishedDate() }}
                @endif
            </h3>
        </div>

        <div class="prose max-w-none">
            {{ $project->description }}
        </div>

        @if ($project->jobPosition)
            <div class="mt-5 mb-2 text-gray-400">
                Gerealiseerd bij: {{ $project->jobPosition->company->name }} ({{ $project->jobPosition->name }})
            </div>
        @endif

        <div class="flex flex-wrap gap-2 mt-5">
            @foreach ($project->skills as $skill)
                <x-skills.tag :skill="$skill"/>
            @endforeach
        </div>
    </div>
</div>
