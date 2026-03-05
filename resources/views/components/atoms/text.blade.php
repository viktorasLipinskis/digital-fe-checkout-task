@props([
    'size' => 'base',
    'color' => 'primary',
    'underscore' => false,
])

@php
    $sizeClasses = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'base' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
        '2xl' => 'text-[32px]',
    ];

    $colorClasses = [
        'primary' => 'text-font-primary',
        'secondary' => 'text-font-secondary',
        'tertiary' => 'text-font-tertiary',
        'danger' => 'text-font-danger',
    ];

    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['base'];
    $colorClass = $colorClasses[$color] ?? $colorClasses['primary'];
    $underscoreClass = $underscore ? 'line-through' : '';
@endphp

<span {{ $attributes->merge(['class' => "inline-block $sizeClass $colorClass $underscoreClass"]) }}>
    {{ $slot }}
</span>
