<x-main-layout>
    {{-- Main Hukum --}}
    <div class="sm:m-5">
        {{-- Beranda --}}
        <div class="bg-white">
            @include('layouts.mydata.accordion-beranda')
        </div>

        {{-- Artikel dan Data --}}
        <div class="bg-white">
            @include('layouts.mydata.accordion-artikel-data')
        </div>

        {{-- Hidden Sidemenu --}}
        <div class="block md:hidden">
            @include('dashboard.menu.side-menu')
        </div>
    </div>

</x-main-layout>
