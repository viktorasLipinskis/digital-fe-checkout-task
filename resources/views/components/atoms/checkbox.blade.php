@props(['planId'])

<div {{ $attributes }}>
    <div x-show="selectedId !== {{ $planId }}"
        class="w-6 h-6 rounded-full border-2 border-checkbox-primary-unchecked flex-shrink-0">
    </div>

    <div x-show="selectedId === {{ $planId }}"
        class="w-6 h-6 rounded-full bg-checkbox-primary-checked flex items-center justify-center flex-shrink-0">
        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
        </svg>
    </div>
</div>
