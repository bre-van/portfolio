@props(['webp' => '', 'class' => '', 'image', 'width', 'height', 'alt'])
<picture>
    @if($webp)
        <source srcset="{{ asset('images/' . $webp) }}" type="image/webp" class="{{ $class }}">
    @endif
    <img src="{{ asset('images/' . $image) }}" alt="{{ $alt }}" width="{{ $width }}" height="{{$height}}" class="{{ $class }}">
</picture>
