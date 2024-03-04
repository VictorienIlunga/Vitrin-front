@props(['active'])
@php


 $classe = ($active ?? false)
        ? 'w-12 h-12  md:w-[99%]  md:h-auto   bg-white  text-black rounded-full md:rounded-full overflow-hidden md:my-1 text-[15px] font-bold cursor-pointer'
        : 'w-12 h-12  md:w-[99%]  md:h-auto text-gray-300 md:hover:text-black md:hover:bg-white md:hover:font-bold  rounded-full md:rounded-full cursor-pointer  '  
@endphp

<div  {{ $attributes->merge(['class' => $classe]) }}>
    <a rel="noopener noreferrer"  class="w-full h-full flex justify-center md:justify-start items-center md:p-1 md:space-x-2  ">
            {{$slot}} 
    </a>
</div>