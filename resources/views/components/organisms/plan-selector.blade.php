@props(['products'])

<div class="w-fit mx-auto max-w-[648px] stack-center-col">
    <x-atoms.text color="secondary" class="text-center font-bold leading-[1.2] text-[22px] md:text-[36px]">
        {{ __('checkout.plan_selector.heading') }}
        <x-atoms.text class="font-bold italic leading-[1.2] text-[22px] md:text-[36px]">
            {{ __('checkout.plan_selector.subheading') }}
        </x-atoms.text>
    </x-atoms.text>

    <x-atoms.text color="secondary" class="stack-center mt-6 md:mt-8 mb-1 md:mb-2 text-[22px] md:text-[28px]">
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

    <div x-show="products.length > 0" class="w-[324px] md:w-[356px]" x-cloak>
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

            <x-organisms.plan-card :plan="$product" :months="$months" :perMonth="$perMonth" :planLabel="$planLabel"
                :price="$price" :discountedPrice="$discountedPrice" :isMostPopular="$isMostPopular" />
        @endforeach

        <x-atoms.button @click="submitOrder()" class="rounded-lg h-14" full>
            {{ __('checkout.button.order_now') }}
        </x-atoms.button>

        <x-atoms.text x-html="ctaText" color="tertiary" class="h-27 leading-[18px] inline-block my-4 mr-6 text-xs">
        </x-atoms.text>

        <x-molecules.money-back />
    </div>
</div>
