@props(['inline' => false])

<x-nav.nav-link :active="request()->routeIs('about')" :inline="$inline" link="/">Over mij</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('projects')" :inline="$inline" link="/projects">Projecten</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('resume')" :inline="$inline" link="/career">Carrière</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('contact')" :inline="$inline" link="/contact">Contact</x-nav.nav-link>
