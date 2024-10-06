<a href={{$href}} class="btn relative inline-block px-4 py-2 font-medium group rounded-xl">
    {{-- Transform--}}
    <span class="btn absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
    {{-- Active Hover --}}
    <span class="btn absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
    <span class="btn relative text-black group-hover:text-white flex justify-around">
        {{$slot}}
    </span>
</a>






