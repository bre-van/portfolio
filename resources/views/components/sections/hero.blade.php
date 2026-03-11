<section class="mx-auto max-w-7xl" id="hero" x-intersect:enter="activeSection = 'hero'">
    <div class="xl:flex items-center px-15 xl:pr-0">
        <div class="flex-1 pt-30 lg:pr-20 text-center sm:text-left">
            <span class="text-primary text-3xl font-medium tracking-tight mb-4 block">
                Hi!
            </span>
            <h1 class="text-4xl lg:text-7xl/18 my-4 font-extrabold text-white tracking-tight">
                Ik ben<br/><span class="text-primary drop-shadow-sm">Brecht Vanderdonckt</span>
            </h1>
            <h2 class="text-2xl lg:text-4xl mb-6 text-gray-400 font-medium">
                Full Stack Web Developer
            </h2>
            <div class="flex flex-col gap-y-12 sm:flex-row sm:gap-5 mt-10 mb-20 items-center">
                <div>
                    <x-button link="#footer">
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
        <div class="xl:pt-50 max-w-md xl:max-w-none mx-auto relative group">
            <div class="relative">
                <x-image webp="brecht-photo.webp" image="brecht-photo.jpg" width="511" height="530" alt="Brecht Vanderdonckt"
                         fetchpriority="high" loading="eager"
                         class="rounded-3xl shadow-2xl transition-transform duration-500 hover:scale-[1.02]" />
            </div>
        </div>
    </div>
</section>

<div class="bg-primary/5 py-24 relative overflow-hidden border-y border-white/5">
    <div class="absolute inset-0 bg-primary/5 blur-3xl rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="mx-auto max-w-4xl px-10 text-lg text-center relative z-10">
        <h2 class="text-4xl lg:text-5xl mb-12 font-bold tracking-tight text-white inline-block">
            Over <span class="text-primary underline decoration-primary/30 underline-offset-8">mezelf</span>
        </h2>
        <div class="space-y-6 text-gray-300 leading-relaxed text-xl">
            <p>
                <strong>Ik ben een ervaren Full Stack Web Developer en al professioneel actief in de websector sinds
                    2011.</strong>
                Doorheen de jaren heb ik bij PBS Benelux meegewerkt aan uiteenlopende webapplicaties,
                variërend van grootschalige B2B-e-commerceplatformen tot interne back-office tools.
            </p>
            <p>
                Mijn focus ligt vooral op PHP en Laravel, aangevuld met MySQL en Prestashop.
                Ik werk graag aan oplossingen die technisch degelijk zijn,
                onderhoudsvriendelijk blijven en echt gebruikt worden.
                Zowel zelfstandig als in teamverband neem ik verantwoordelijkheid op
                en denk ik actief mee over structuur, performance en gebruikservaring.
            </p>
        </div>
    </div>
</div>
