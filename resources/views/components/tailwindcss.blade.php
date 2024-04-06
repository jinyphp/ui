@once
    @push('css')
    <script src="https://cdn.tailwindcss.com"></script>
    @endpush
@endonce

<div {{ $attributes->merge(['class' => 'tailwind']) }}>
    {{$slot}}
</div>

@once
    @push('scripts')

    @endpush
    @endonce
