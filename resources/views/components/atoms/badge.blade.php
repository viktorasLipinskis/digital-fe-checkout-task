@props([
    'variant' => 'primary',
    'full' => false,
])

@php
    $variantClasses = [
        'primary' => 'bg-primary text-white',
        'secondary' => 'bg-secondary text-white',
        'danger' => 'bg-danger text-white',
    ];

    $variantClass = $variantClasses[$variant] ?? $variantClasses['primary'];
    $widthClass = $full ? 'w-full' : '';
@endphp

<span
    {{ $attributes->merge(['class' => "inline-block bg-danger px-2 py-1 text-xs font-semibold rounded-xl $variantClass $widthClass"]) }}>
    {{ $slot }}
</span>
