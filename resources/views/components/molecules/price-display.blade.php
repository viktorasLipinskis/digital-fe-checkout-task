@props(['price', 'discountedPrice' => null])
<div class="flex w-full">
    @if ($discountedPrice and $discountedPrice < $price)
        <x-atoms.text color="danger" class="text-xs" underscore>
            &euro;{{ $price }}
        </x-atoms.text>
        <x-atoms.text color="secondary" class="mx-1 text-xs">
            &euro;{{ $discountedPrice }}
        </x-atoms.text>
    @else
        <x-atoms.text color="secondary" class="text-xs">
            &euro;{{ $price }}
        </x-atoms.text>
    @endif
</div>
