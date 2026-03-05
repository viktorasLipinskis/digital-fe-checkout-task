<x-templates.checkout-layout>

    {{-- @php dump($products) @endphp --}}

    <main>
        {{-- <x-atoms.badge variant="danger"> --}}
        {{--    {{ __('checkout.badge.most_popular') }} --}}
        {{-- </x-atoms.badge> --}}
        <x-organisms.countdown-banner />
        <x-organisms.header />
        <x-organisms.plan-selector :products="$products" />

    </main>
</x-templates.checkout-layout>
