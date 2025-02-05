<article {{ $attributes->merge(['class' => "row align-items-start align-items-md-center gx-0 gy-4"]) }}>
    {{$slot}}
</article>

@once
    @push('scripts')
        <script src="/assets/vendor/glightbox/dist/js/glightbox.min.js"></script>
    @endpush
@endonce