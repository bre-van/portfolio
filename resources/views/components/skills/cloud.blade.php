@props([
    'skills',
])

@foreach ($skills as $skill)
    @php
        $skill_text_size = match($skill->level->value) {
            1 => 'text-4xl',
            2, 3 => 'text-2xl',
            default => 'text-base',
        };
    @endphp

    <span
        class="{{ $skill_text_size }} px-3 rounded-full
                                items-baseline
                           bg-gray-800 hover:bg-gray-700 text-neutral-100 transition"
    >
                    {{ $skill->name }}
                </span>
@endforeach
