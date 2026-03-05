@props(['products'])

<div class="w-fit mx-auto">
    <x-atoms.text size="lg">
        {{ __('checkout.plan_selector.title') }}
    </x-atoms.text>

    @php
        $products = collect($products)->sortBy(fn($p) => (int) $p['slug'])->values();
        $middleIndex = (int) floor($products->count() / 2);
        $popularIndex = $products->search(fn($p) => (int) $p['slug'] === 6);

        if ($popularIndex !== false && $popularIndex !== $middleIndex) {
            $popular = $products->pull($popularIndex);
            $products = $products->values();
            $products->splice($middleIndex, 0, [$popular]);
        }
    @endphp

    @foreach ($products as $product)
        @php
            $months = (int) $product['slug'];
            $pricing = $product['pricing'];
            $perMonth = $pricing['discounted_price'] / $months;
            $perMonth = number_format($perMonth, 2);
            $price = number_format($pricing['price'], 2);
            $discountedPrice = number_format($pricing['discounted_price'], 2);
            $planLabel = __('checkout.plan_selector.plan_label', ['months' => $months]);
            $isMostPopular = $months === 6;
        @endphp

        <x-organisms.plan-card :plan="$product" :months="$months" :perMonth="$perMonth" :planLabel="$planLabel" :price="$price"
            :discountedPrice="$discountedPrice" :isMostPopular="$isMostPopular" />
    @endforeach
</div>
