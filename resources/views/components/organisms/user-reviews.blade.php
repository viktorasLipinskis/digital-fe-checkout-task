@props(['reviews'])

<div class="stack-center-col mt-16 pb-24 mx-3">
    <x-atoms.text color="secondary" weight="bold" class="mb-8 text-[22px] md:text-[28px]">
        {{ __('checkout.user_reviews.heading') }}
    </x-atoms.text>

    <div x-show="reviews.length > 0" class="flex gap-4 flex-col md:flex-row items-start justify-center" x-cloak>
        @foreach ($reviews as $review)
            @php
                $name = $review['name'];
                $age = (int) $review['age'];
                $handle = $review['handle'];
                $description = $review['description'];
            @endphp

            <x-molecules.review-card :name="$name" :age="$age" :handle="$handle" :description="$description" />
        @endforeach
    </div>
</div>
