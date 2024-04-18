
<div class="flex justify-center items-center">
    <div class="relative p-5">
        <img src={{ $src }} alt="">
        <a href={{ $href }} class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 m-1 p-1 border-2 border-black bg-gray-100 text-xs">
            {{ $slot }}
        </a>
    </div>
</div>
