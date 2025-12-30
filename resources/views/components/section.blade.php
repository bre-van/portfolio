@props([
    'title', 'anchor'
])

<section id="{{ $anchor }}" class="scroll-mt-24 px-10 py-16 border-b border-gray-800">
    <header class="max-w-7xl mx-auto">
        <h2 class="text-5xl/20 font-bold text-pretty text-primary">
            {{ $title }}
        </h2>
    </header>

    <div
        x-intersect:enter="activeSection = '{{ $anchor }}'">
        {{ $slot }}
    </div>
</section>
