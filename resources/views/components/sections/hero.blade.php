<div class="mx-auto max-w-7xl" id="hero">
    <div class="flex items-center">
        <div class="flex-1 lg:pr-20 pt-10 opacity-0 transition-all ease-out duration-700"
             x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 50)"
             x-bind:class="show ? 'opacity-100 visible translate-y-0' : 'opacity-0 invisible translate-y-4'">
            <span class="text-primary text-3xl">
                Hi!
            </span>
            <h1 class="text-6xl/16 my-3 font-bold text-gray-100">
                Ik ben <span class="text-nowrap">Brecht Vanderdonckt</span>
            </h1>
            <h2 class="text-3xl mb-3">
                Full Stack Web Developer
            </h2>
            <div class="flex gap-5 mt-10 mb-20 items-center">
                <div>
                    <x-button link="#contact">
                        Contacteer mij
                    </x-button>
                </div>
                <div>
                    <x-button link="#projects">
                        Bekijk mijn portfolio
                    </x-button>
                </div>
            </div>
        </div>
        <x-fadeIn :delay="300">
            <img src="{{ asset('images/brecht-photo.png') }}" alt="Brecht Vanderdonckt"
                 class="rounded-lg shadow-lg object-cover align-bottom pt-50">
        </x-fadeIn>
    </div>
</div>

<div class="bg-primary/60 py-10">
    <div class="mx-auto max-w-4xl text-lg text-center">
        <h2 class="text-6xl/16 mb-5 font-bold border-b border-b-primary pb-5 inline-block">
            Over mezelf
        </h2>
        <p class="mt-4 leading-relaxed">
            <strong>Ik ben een ervaren Full Stack Web Developer en al professioneel actief in de websector sinds 2011.</strong>
            Doorheen de jaren heb ik bij PBS Benelux meegewerkt aan uiteenlopende webapplicaties,
            variërend van grootschalige B2B-e-commerceplatformen tot interne back-office tools.
        </p>
        <p class="mt-4 leading-relaxed">
            Mijn focus ligt vooral op PHP en Laravel, aangevuld met MySQL en Prestashop.
            Ik werk graag aan oplossingen die technisch degelijk zijn,
            onderhoudsvriendelijk blijven en echt gebruikt worden.
            Zowel zelfstandig als in teamverband neem ik verantwoordelijkheid op
            en denk ik actief mee over structuur, performance en gebruikservaring.
        </p>
    </div>
</div>
