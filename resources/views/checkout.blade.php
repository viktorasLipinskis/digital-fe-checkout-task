<x-templates.checkout-layout>
    <main class="page-gradient min-h-screen">
        <div x-data='checkout'
            x-init='(
         products = @json($products),
         reviews = @json($reviews),
         ctaTemplate = @json(__('checkout.cta.text')),
         ctaEmail = @json(__('checkout.cta.contact_email'))
     )'>
            <x-organisms.countdown-banner />
            <x-organisms.header />
            <x-organisms.plan-selector :products="$products" />
            <x-organisms.user-reviews :reviews="$reviews" />
        </div>
    </main>
</x-templates.checkout-layout>
