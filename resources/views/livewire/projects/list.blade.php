<div>
    {{-- Grid --}}
    <div class="grid gap-10 sm:grid-cols-2">
        @forelse ($projects as $project)
            <x-projects.card :project="$project"/>
        @empty
            <p class="text-neutral-400">Geen projecten gevonden.</p>
        @endforelse
    </div>

    @if($showMoreButton)
        <div class="text-center mt-10">
            <button wire:click="showMore" type="button"
                    class="text-primary-dark mx-auto relative z-0 p-3 px-10 text-lg cursor-pointer rounded-full border-primary border-2 hover:bg-primary hover:text-black after:absolute after:left-0 after:top-0 after:-z-10 after:h-full after:w-full after:rounded-full after:bg-primary hover:after:scale-x-125 hover:after:scale-y-150 hover:after:opacity-0 hover:after:transition hover:after:duration-500">
                Meer laden...
            </button>
        </div>
    @endif
</div>
