@props(['mobile' => false])

<x-nav.nav-link :active="request()->routeIs('about')" :mobile="$mobile" link="/">Over mij</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('projects')" :mobile="$mobile" link="/portfolio">Portfolio</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('resume')" :mobile="$mobile" link="/career">Carrière</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('contact')" :mobile="$mobile" link="/contact">Contact</x-nav.nav-link>
