@props([
    'title', 'anchor'
])

<section id="{{ $anchor }}" class="scroll-mt-60 md:scroll-mt-20 px-8 py-16 border-b border-gray-800"
         x-intersect.threshold.25="activeSection = '{{ $anchor }}'">
    <header class="max-w-7xl mx-auto">
        <h2 class="text-5xl/20 font-bold text-pretty text-primary">
            {{ $title }}
        </h2>
    </header>

    <div>
        {{ $slot }}
    </div>
</section>
