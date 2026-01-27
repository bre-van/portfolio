@props([
    'skill',
])

<span
    class="text-sm px-2.5 py-1 rounded-full
                           bg-gray-800 hover:bg-gray-700 text-neutral-100 transition"
>
                    {{ $skill->name }}
                </span>
