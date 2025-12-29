<x-app>
    <x-slot name="title">
        Over mij
    </x-slot>

    <div class="mx-auto max-w-7xl">
        <div class="flex items-end">
            <div class="flex-1 lg:pr-20 pt-10 opacity-0 transition-all ease-out duration-700"
                 x-data="{ show: false }"
                 x-init="setTimeout(() => show = true, 50)"
                 x-bind:class="show ? 'opacity-100 visible translate-y-0' : 'opacity-0 invisible translate-y-4'">
                <h1 class="text-primary text-3xl">
                    Hi!
                </h1>
                <h1 class="text-6xl/16 my-3 font-bold text-white">
                    Ik ben <span class="text-nowrap">Brecht Vanderdonckt</span>
                </h1>
                <div class="bg-primary-dark p-9 my-5 text-lg/7 mb-15 rounded-lg">
                    <h2 class="text-primary text-3xl mb-3">
                        Ervaren Full Stack Web Developer
                    </h2>
                    <p>
                        Ik ben reeds professioneel actief in deze sector sinds 2011 en ik ben vertrouwd met PHP,
                        Laravel,
                        MySQL en Prestashop, en werk ik zowel zelfstandig als in teamverband efficiënt
                        aan projecten. Ik leer graag bij en blijf mijn vaardigheden continu verbeteren.
                    </p>
                </div>
                <div class="flex gap-5 mt-5 mb-20 items-center">
                    <div>
                        <x-button :link="route('contact')">
                            Contacteer mij
                        </x-button>
                    </div>
                    <div>
                        <x-button :link="route('projects')">
                            Bekijk mijn portfolio
                        </x-button>
                    </div>
                </div>
            </div>
            <div class="opacity-0 transition-all ease-out duration-700"
                 x-data="{ show: false }"
                 x-init="setTimeout(() => show = true, 500)"
                 x-bind:class="show ? 'opacity-100 visible translate-y-0' : 'opacity-0 invisible translate-y-8'">
                <img src="{{ asset('images/brecht-photo.png') }}" alt="Brecht Vanderdonckt"
                     class="rounded-lg shadow-lg object-cover align-bottom">
            </div>
        </div>
    </div>
</x-app>
