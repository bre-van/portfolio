@props(['delay' => 0])

<div class="opacity-0 transition-all ease-out duration-700"
     x-data="{ show: false }"
     x-init="setTimeout(() => show = true, {{$delay}})"
     x-bind:class="show ? 'opacity-100 visible' : 'opacity-0 invisible'">
    {{ $slot }}
</div>
