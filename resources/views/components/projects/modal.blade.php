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
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4">
    <!-- Backdrop -->
    <div class="absolute inset-0" @click="close()"></div>


    <div
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="flex flex-col relative z-10 bg-primary-dark shadow-2xl rounded-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] border border-gray-800"
    >
        <button
            @click="close()"
            class="absolute top-4 right-4 z-50 p-2 rounded-full bg-black/50 text-white hover:bg-primary hover:text-primary-dark transition-all duration-300 cursor-pointer group"
            aria-label="Sluiten"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="relative group/image overflow-hidden">
            <x-image webp="projects/webp/{{$project->webpImage()}}" image="projects/{{$project->image}}"
                     width="900"
                     height="400"
                     class="w-full aspect-video object-cover object-top transition-transform duration-700 group-hover/image:scale-105"
                     alt="{{ $project->title }}" />
            <div class="absolute inset-0 bg-linear-to-t from-primary-dark via-transparent to-transparent opacity-60"></div>
        </div>

        <div class="flex-1 overflow-y-auto px-6 py-8 md:px-10 custom-scrollbar">
            <div class="mb-6">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mb-2">
                    <span class="text-primary font-medium tracking-wider uppercase text-xs">
                        {{ $project->type }}
                    </span>
                    @if($project->finished_at)
                        <span class="text-gray-500 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            {{ $project->finishedDate() }}
                        </span>
                    @endif
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">
                    {{ $project->title }}
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div class="md:col-span-2 space-y-4 text-gray-300 leading-relaxed text-lg project-content">
                    {!! $project->description !!}
                </div>

                <div class="space-y-6">
                    @if ($project->jobPosition)
                        <div class="bg-gray-900/50 p-4 rounded-xl border border-gray-800">
                            <h4 class="text-white font-semibold mb-1 text-sm uppercase tracking-wide">Realisatie</h4>
                            <p class="text-gray-400 text-sm">
                                {{ $project->jobPosition->company->name }}
                            </p>
                            <p class="text-gray-500 text-xs italic">
                                {{ $project->jobPosition->name }}
                            </p>
                        </div>
                    @endif

                    @if ($project->url)
                        <a href="{{ $project->url }}" target="_blank"
                           class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary text-primary-dark font-bold rounded-lg hover:bg-white transition-colors duration-300 group/link shadow-lg shadow-primary/10">
                            Bezoek de website
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2 transition-transform group-hover/link:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    @endif

                    <div class="pt-4 border-t border-gray-800">
                        <h4 class="text-white font-semibold mb-3 text-sm uppercase tracking-wide">Technologieën</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->skills as $skill)
                                <x-skills.tag :skill="$skill"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
