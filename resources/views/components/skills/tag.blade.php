@props([
    'skill',
])

<span
    class="text-xs px-2.5 py-1 rounded-full
                           bg-primary-dark/75 text-neutral-300
                           group-hover:bg-neutral-700 transition"
>
                    {{ $skill->name }}
                </span>
