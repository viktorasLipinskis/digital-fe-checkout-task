@props([
    'color' => 'primary',
    'underscore' => false,
])

@php
    $colorClasses = [
        'primary' => 'text-font-primary',
        'secondary' => 'text-font-secondary',
        'tertiary' => 'text-font-tertiary',
        'danger' => 'text-font-danger',
    ];

    $colorClass = $colorClasses[$color] ?? $colorClasses['primary'];
    $underscoreClass = $underscore ? 'line-through' : '';
@endphp

<span {{ $attributes->merge(['class' => "$colorClass $underscoreClass"]) }}>
    {{ $slot }}
</span>
