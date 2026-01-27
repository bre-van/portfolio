<x-app>
    <x-slot name="title">
        Over mij
    </x-slot>

    <x-sections.hero />
    <x-sections.projects />
    {{-- <x-sections.skills :skills="$skills" /> --}}
    <x-sections.carreer :jobPositions="$jobPositions" :educations="$educations" />
    <x-sections.contact />
</x-app>
