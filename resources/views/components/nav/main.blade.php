<div class="fixed bg-primary-dark w-full z-5">
    <div class="mx-auto border-b border-gray-800 px-6">
        <nav x-data="{ open: false }"
             class="relative after:pointer-events-none after:absolute container mx-auto">
            <div class="mx-auto py-4 lg:py-8 md:pb-5 sm:px-2 lg:px-0">
                <div class="relative flex items-bottom justify-between">
                    <div class="items-center text-xl sm:text-2xl xl:text-4xl text-nowrap font-bold text-primary">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset("/images/logo.png") }}"
                                 loading="eager" fetchpriority="high"
                                 alt="BVDT" class="max-h-[55px] mr-1 md:hidden" /> <span class="hidden md:block">Brecht Vanderdonckt</span>
                        </a>
                    </div>

                    <div class="hidden md:ml-6 md:block">
                        <div class="flex md:space-x-5 lg:space-x-10">
                            <x-nav.nav-menu :inline="true"/>
                        </div>
                    </div>

                    <x-nav.menu-button/>
                </div>
            </div>

            <div x-show="open" x-cloak id="mobile-menu" class="block md:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3 text-lg/12 font-bold">
                    <x-nav.nav-menu/>
                </div>
            </div>
        </nav>
    </div>
</div>
