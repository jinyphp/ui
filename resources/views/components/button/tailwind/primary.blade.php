{{-- Tailwind CSS / Button--}}
<button {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-white bg-blue-700 border border-blue-700 rounded focus:outline-none hover:text-white hover:bg-blue-800 hover:border-blue-800 focus:ring focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-700 active:border-blue-700'
    ]) }}>
    {{$slot}}
</button>
