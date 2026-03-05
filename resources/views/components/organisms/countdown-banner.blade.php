<div x-data="countdownBanner" class="h-[40px] bg-danger">
    <div class="bg-danger text-white text-center py-2">
        <x-atoms.text class="text-white">
            {{ __('checkout.countdown_banner.message') }}
        </x-atoms.text>
        <span x-text="countdownDisplay" class="ml-2" />
    </div>
</div>
