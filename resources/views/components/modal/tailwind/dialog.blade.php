@props(['id' => null, 'maxWidth' => null, 'opacity'=>null])

<x-popup-modal :id="$id" :maxWidth="$maxWidth" :opacity="$opacity" {{ $attributes }}>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    @if (isset($content))
    <div class="w-full p-5 space-y-6 lg:p-6 grow">
        {{ $content }}
    </div>
    @endif

    @if (isset($footer))
    <div class="w-full px-5 py-4 space-x-1 text-right lg:px-6 bg-gray-50">
        {{ $footer }}
    </div>
    @endif

</x-popup-modal>
