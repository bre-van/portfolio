@props(['inline' => false])

<x-nav.nav-link :active="request()->routeIs('about')" :inline="$inline" link="#hero" anchor="hero">Over mij</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('projects')" :inline="$inline" link="#projects" anchor="projects">Projecten</x-nav.nav-link>
<x-nav.nav-link :active="request()->routeIs('resume')" :inline="$inline" link="#career" anchor="career">Carrière</x-nav.nav-link>
{{--<x-nav.nav-link :active="request()->routeIs('contact')" :inline="$inline" link="#footer" anchor="footer">Contacteer mij</x-nav.nav-link>--}}
