@props([
        'link' => '#',
        'anchor' => '',
        'active' => false,
        'inline' => true,
        'classes' => ''
        ])

@if($active)
    @php
        $classes .= ' text-primary';

        if($inline)
        {
            $classes .= ' border-b-2 border-primary';
        }
    @endphp
@endif

@if(!$inline)
    @php
        $classes .= ' block';
    @endphp
@else
    @php
        $classes .= ' hover:border-b-2 hover:border-primary transition-colors duration-500 lg:text-xl';
    @endphp
@endif


<a href="{{ $link }}" aria-current="page"
   class="border-b-0 hover:text-primary {{ $classes }}"
   :class="activeSection === '{{ $anchor }}' ? 'border-b-2 text-primary' : ''">
    {{ $slot }}
</a>
