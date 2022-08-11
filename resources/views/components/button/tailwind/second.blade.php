{{-- Tailwind CSS / Button--}}
<button {{ $attributes->merge([
    'class' => 'inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 border-gray-700 bg-gray-700 text-white hover:text-white hover:bg-gray-800 hover:border-gray-800 focus:ring focus:ring-gray-500 focus:ring-opacity-50 active:bg-gray-700 active:border-gray-700'
    ]) }}>
    {{$slot}}
</button>


