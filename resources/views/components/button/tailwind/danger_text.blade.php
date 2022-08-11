{{-- Tailwind CSS / Button-Text --}}
<button type="button"
{{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-red-600 border border-transparent rounded focus:outline-none hover:text-red-400 focus:ring focus:ring-red-500 focus:ring-opacity-50 active:text-red-600'
]) }}>
    {{$slot}}
</button>
