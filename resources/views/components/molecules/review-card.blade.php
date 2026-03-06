@props(['name', 'age', 'review', 'handle', 'description'])

<div class="stack-start-col rounded-lg bg-white mx-2 max-w-[300px] h-fit">
    <div class="stack px-4 pt-4 pb-2">
        <x-atoms.avatar :handle="$handle" :name="$name" />
        <div class="stack-start-col">
            <x-atoms.text size="sm" color="secondary" class="font-bold">
                {{ $name }}, {{ $age }}
            </x-atoms.text>

            <x-atoms.text size="sm" color="secondary" class="mt-1">
                {{ $handle }}
            </x-atoms.text>
        </div>
    </div>

    <x-atoms.text size="xs" color="secondary" class="px-4 pb-4">
        {{ $description }}
    </x-atoms.text>
</div>
