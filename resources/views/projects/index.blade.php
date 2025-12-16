<x-app>
    <x-slot name="title">
        Projecten
    </x-slot>

    <div class="mx-auto max-w-7xl">
        <div class="flex items-end">
            <div class="flex-1 lg:pr-20 pt-10">
                <h1 class="text-6xl/16 my-3 font-bold text-white">
                    Projecten
                </h1>
                <p>
                    Hier vindt u een overzicht van enkele van mijn meest recente en opvallende projecten. Elk project
                    weerspiegelt mijn toewijding aan kwaliteit, innovatie en klanttevredenheid.
                </p>
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mt-5">
                        @foreach ($projects as $project)
                            <x-projects.card :project="$project" />
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</x-app>
