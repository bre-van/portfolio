@props([
    'title', 'anchor'
])

<div id="{{ $anchor }}" class="scroll-mt-24 py-16 border-b border-gray-800">
    <header class="max-w-7xl mx-auto">
        <h2 class="text-6xl/22 font-bold text-pretty text-primary">
            {{ $title }}
        </h2>
    </header>

    {{ $slot }}
</div>
