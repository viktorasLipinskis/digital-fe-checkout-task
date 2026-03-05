<x-templates.checkout-layout>
    <main>
        <div x-data='checkout' x-init='products = @json($products)'>
            <x-organisms.countdown-banner />
            <x-organisms.header />
            <x-organisms.plan-selector :products="$products" />
        </div>
    </main>
</x-templates.checkout-layout>
