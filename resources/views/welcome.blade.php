<x-main-layout>
    {{-- Main Hukum --}}
    <div class="sm:mx-5">
        {{-- The Menu --}}
        @include('layouts.mydata.the-menu')

        <div class="grid md:grid-cols-12">
            <div class="md:col-span-10">
                {{-- The Articles --}}
                @include('layouts.mydata.artikel')
            </div>
            <div class="md:col-span-2">
                {{-- The Data Types --}}
                @include('layouts.mydata.data')
            </div>


        </div>
    </div>

</x-main-layout>
