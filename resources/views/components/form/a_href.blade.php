<a  {{ $attributes->merge(['class' =>
 'inline-flex items-center
 px-4 py-2 bg-gray-800 border border-transparent rounded-md
 font-semibold text-ms text-white uppercase
 hover:bg-gray-300
 active:bg-gray-900 focus:outline-none
 focus:border-gray-900 focus:ring
 ring-gray-300 disabled:opacity-25
 transition ease-in-out
 duration-150']) }}>
    {{ $slot }}
</a>
