@props([
        'link' => '#',
        'active' => false,
        'mobile' => false,
        'classes' => ''
        ])

@if($active)
    @php
        $classes .= ' text-amber-400 border-b-2 border-amber-400';
    @endphp
@endif

@if($mobile)
    @php
        $classes .= ' block';
    @endphp
@else
    @php
        $classes .= ' hover:border-b-2 hover:border-amber-400 transition-colors duration-500 text-xl';
    @endphp
@endif


<a href="{{ $link }}" aria-current="page" class="py-2 border-b-0 hover:text-amber-400 {{ $classes }}">
    {{ $slot }}
</a>
