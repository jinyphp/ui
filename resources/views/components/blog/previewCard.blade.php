<article {{ $attributes->merge(['class' => 'w-64 m-4']) }}>
  <!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% -->
    {{$slot}}
</article>
@once
    @push('scripts')
        <script src="/assets/vendor/glightbox/dist/js/glightbox.min.js"></script>
    @endpush
@endonce
