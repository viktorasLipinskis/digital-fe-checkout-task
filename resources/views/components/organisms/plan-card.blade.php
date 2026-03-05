@props(['plan', 'months', 'perMonth', 'planLabel', 'price', 'discountedPrice', 'isMostPopular'])

<div @click="selectedId = {{ $plan['id'] }}"
    class="flex items-center bg-white rounded-xl p-4 lg:max-w-[360px] h-[114px] border border-[#ADB1B9] my-4">
    <x-atoms.checkbox :planId="$plan['id']" class="mr-4" />

    <div class="flex flex-col flex-[2]">
        <x-atoms.text size="md" color="secondary" class="font-semibold">
            {{ $planLabel }}
        </x-atoms.text>

        <x-molecules.price-display :price="$price" :discountedPrice="$discountedPrice ?? null" />

        <x-atoms.text size="xs" color="tertiary">
            {{ __('checkout.plan_selector.plan_description', ['months' => $months]) }}
        </x-atoms.text>

        @if ($isMostPopular)
            <x-atoms.badge variant="danger" class="w-fit mt-2">
                {{ __('checkout.badge.most_popular') }}
            </x-atoms.badge>
        @endif
    </div>

    <div class="separator h-full mx-2 border-l border-gray-300"></div>

    <div class="flex flex-col items-center justify-center flex-[1] min-w-[134px]">
        <x-atoms.text size="2xl" color="secondary" class="font-semibold">
            &euro;{{ $perMonth }}
        </x-atoms.text>
        <x-atoms.text size="xs" color='tertiary'>
            {{ __('checkout.plan_selector.per_month') }}
        </x-atoms.text>
    </div>
</div>
