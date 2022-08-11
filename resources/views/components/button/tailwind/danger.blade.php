{{-- Tailwind CSS / Button--}}
<button {{ $attributes->merge([
    'class' => 'inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 border-rose-700 bg-rose-700 text-white hover:text-white hover:bg-rose-800 hover:border-rose-800 focus:ring focus:ring-rose-500 focus:ring-opacity-50 active:bg-rose-700 active:border-rose-700'
    ]) }}>
    {{$slot}}
</button>
