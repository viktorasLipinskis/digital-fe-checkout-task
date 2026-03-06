@props(['name', 'age', 'handle', 'description'])

<div class="stack-start-col rounded-lg bg-white max-w-[336px] md:max-w-[300px] h-fit">
    <div class="stack px-4 pt-4 pb-2">
        <x-atoms.avatar :handle="$handle" :name="$name" />
        <div class="stack-start-col">
            <x-atoms.text color="secondary" class="font-bold text-sm">
                {{ $name }}, {{ $age }}
            </x-atoms.text>

            <x-atoms.text color="secondary" class="mt-1 text-sm">
                {{ $handle }}
            </x-atoms.text>
        </div>
    </div>

    <x-atoms.text color="secondary" class="px-4 pb-4 text-xs">
        {{ $description }}
    </x-atoms.text>
</div>
