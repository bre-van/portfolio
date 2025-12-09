<x-app>
    <x-slot name="title">
        Over mij
    </x-slot>

    <div class="container mx-auto max-w-7xl text-white">
        <div class="flex items-center">
            <div class="flex-1 lg:pr-20">
                <h1 class="text-amber-400 text-2xl">
                    Hallo!
                </h1>
                <h1 class="text-6xl/16 my-3 font-bold">
                    Ik ben <span class="text-nowrap">Brecht Vanderdonckt</span>
                </h1>
                <h3 class="text-xl">
                    Full Stack Web Developer met als thuisbasis Ronse
                </h3>
                <div class="bg-gray-900/50 p-8 my-5 text-lg/7">
                    <p class="mb-4">
                        Ik ben een ervaren Full Stack Web Developer met een passie voor moderne
                        webtechnologieën.
                    </p>
                    <p>
                        Dankzij mijn jarenlange ervaring bij PBS ben ik vertrouwd met PHP, Laravel,
                        MySQL en Prestashop, en werk ik zowel zelfstandig als in teamverband efficiënt
                        aan projecten. Ik leer graag bij en blijf mijn vaardigheden continu verbeteren.
                    </p>
                </div>

                <button type="button" class="bg-yellow-400 box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-full text-sm px-4 py-2.5 focus:outline-none">Default</button>

            </div>
            <div>
                <img src="{{ asset('images/BrechtVanderdonckt.jpg') }}" alt="about"
                     class="rounded-lg shadow-lg object-cover">
            </div>
        </div>
    </div>
</x-app>
