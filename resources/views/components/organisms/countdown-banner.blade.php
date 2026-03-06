<div x-data="countdownBanner" class="h-[40px] bg-danger">
    <div class="bg-danger text-white text-center py-2">
        <x-atoms.text class="text-white text-sm md:text-base">
            {{ __('checkout.countdown_banner.message') }}
        </x-atoms.text>
        <span x-text="countdownDisplay" class="ml-2 text-sm md:text-base" />
    </div>
</div>
