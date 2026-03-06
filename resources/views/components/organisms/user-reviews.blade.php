@props(['reviews'])

<div class="stack-center-col mt-16">
    <x-atoms.text color="secondary" size="2xl" weight="bold" class="mb-8">
        {{ __('checkout.user_reviews.heading') }}
    </x-atoms.text>

    <div x-show="reviews.length > 0" class="stack-center items-start" x-cloak>
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
