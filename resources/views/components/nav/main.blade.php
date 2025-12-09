<div class="container mx-auto">
    <nav x-data="{ open: false }"
         class="relative after:pointer-events-none after:absolute container mx-auto">
        <div class="mx-auto max-w-7xl px-6 sm:px-2 lg:px-0">
            <div class="relative flex h-28 items-center justify-between">
                <div class="items-center text-xl lg:text-2xl xl:text-3xl text-nowrap font-bold text-amber-400">
                    Brecht Vanderdonckt
                </div>

                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-10">
                        <x-nav.nav-menu/>
                    </div>
                </div>

                <x-nav.menu-button/>
            </div>
        </div>

        <div x-show="open" x-cloak id="mobile-menu" class="block sm:hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <x-nav.nav-menu :mobile="true"/>
            </div>
        </div>
    </nav>
</div>
