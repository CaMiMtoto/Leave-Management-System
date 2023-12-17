@props([
    'size' => '',
    'type' => 'button',

])

<button type="{{ $type }}"{{ $attributes->class(['btn btn-primary', 'btn-' . $size]) }}>{{ $slot }}</button>
