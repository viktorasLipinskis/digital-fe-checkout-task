@props([
    'variant' => 'primary',
    'type' => 'button',
    'full' => false,
])

@php
    $variantClasses = $variant ? "btn-$variant" : 'btn-primary';
    $widthClass = $full ? 'w-full' : '';
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$variantClasses $widthClass"]) }}>
    {{ $slot }}
</button>
