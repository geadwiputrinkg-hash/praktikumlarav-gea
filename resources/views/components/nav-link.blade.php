@props(['active' => false])

<a {{ $attributes }} 
   class="{{ $active ? 'bg-black text-white font-semibold' : 'text-gray-300 hover:bg-slate-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium transition-colors" 
   aria-current="{{ $active ? 'page' : 'false' }}">
   {{ $slot }}
</a>