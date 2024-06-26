@once
    @push('css')
    <link rel="stylesheet" href="https://jinyphp.github.io/css/assets/css/app.css">
    @vite('resources/css/app.scss')
    @endpush
@endonce

<div {{ $attributes->merge(['class' => 'bootstrap']) }}>
    {{$slot}}
</div>

@once
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
    @endpush
@endonce
