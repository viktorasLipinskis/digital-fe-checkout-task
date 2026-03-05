@props(['price', 'discountedPrice' => null])
<div class="flex w-full">
    @if ($discountedPrice and $discountedPrice < $price)
        <x-atoms.text size="xs" color="danger" underscore>
            &euro;{{ $price }}
        </x-atoms.text>
        <x-atoms.text size="xs" color="secondary" class="mx-1">
            &euro;{{ $discountedPrice }}
        </x-atoms.text>
    @else
        <x-atoms.text size="xs" color="secondary">
            &euro;{{ $price }}
        </x-atoms.text>
    @endif
</div>
