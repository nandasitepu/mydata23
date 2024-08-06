<x-main-layout>
    {{-- Main Hukum --}}
    <div class="sm:m-5">
        {{-- Beranda --}}
        <div class="">
            @include('layouts.mydata.top-menu')

        </div>
        {{-- Artikel dan Data --}}
        <div class="border-t-2 border-black flex">
            @include('layouts.mydata.accordion-artikel-data')
        </div>
    </div>
</x-main-layout>
