<x-main-layout>
    {{-- Main Hukum --}}
    <div class="bg-green-300">
        {{-- Beranda --}}
        <section>
            @include('layouts.mydata.top-menu')
        </section>
        {{-- Artikel dan Data --}}
        <section class="">
            @include('layouts.mydata.accordion-artikel-data')
        </section>
    </div>
</x-main-layout>
