@php
 $classe = ($activ ?? false)
        ? 'text-black'
        : 'text-gray-300 '  
@endphp

<div  class="{{$classe}} w-8 h-8 flex justify-center items-center">
   {{$slot}}
</div>