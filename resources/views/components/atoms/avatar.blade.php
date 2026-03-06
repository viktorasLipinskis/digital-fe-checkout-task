@props(['handle', 'name'])

<img src="{{ \App\Helpers\ImageHelper::userAvatar($handle) }}" alt="{{ $name }}"
    class="rounded-full w-[51px] h-[51px]" />
