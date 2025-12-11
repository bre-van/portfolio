<x-app>
    <x-slot name="title">
        Over mij
    </x-slot>

    <div class="mx-auto max-w-7xl">
        <div class="flex items-end">
            <div class="flex-1 lg:pr-20 pt-10">
                <h1 class="text-primary text-2xl">
                    Hi!
                </h1>
                <h1 class="text-6xl/16 my-3 font-bold text-white">
                    Ik ben <span class="text-nowrap">Brecht Vanderdonckt</span>
                </h1>
                <h3 class="text-xl text-white italic">
                    Full Stack Web Developer met als thuisbasis Ronse
                </h3>
                <div class="bg-gray-900/50 p-9 my-5 text-lg/7 mb-15 rounded-lg">
                    <p class="mb-4">
                        Ik ben een ervaren Full Stack Web Developer met een passie voor moderne
                        webtechnologieën.
                    </p>
                    <p>
                        Ik ben reeds professioneel actief in deze sector sinds 2011 en ik ben vertrouwd met PHP,
                        Laravel,
                        MySQL en Prestashop, en werk ik zowel zelfstandig als in teamverband efficiënt
                        aan projecten. Ik leer graag bij en blijf mijn vaardigheden continu verbeteren.
                    </p>
                </div>
                <div class="flex gap-4 mt-5 mb-20">
                    <div>
                        <x-button :link="route('contact')">
                            Contacteer mij
                        </x-button>
                    </div>
                    <div>
                        <x-button :link="route('contact')">
                            Bekijk mijn portfolio
                        </x-button>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/brecht-vector.png') }}" alt="Brecht Vanderdonckt"
                     class="rounded-lg shadow-lg object-cover align-bottom">
            </div>
        </div>
    </div>
</x-app>
