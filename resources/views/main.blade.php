<x-main-layout>
    <div>
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

{{-- Hidden Sidemenu --}}
@include('components.menu.side-menu')
