<x-main-layout>
    {{-- Main Hukum --}}
    <div class="sm:mx-5">
        {{-- The Menu --}}
        {{-- @include('layouts.mydata.top-menu') --}}

        @include('layouts.mydata.main-accordion')
        {{-- @include('layouts.mydata.horizontal-menu') --}}
        {{-- @include('layouts.mydata.newsletter') --}}
        {{-- @include('layouts.mydata.artikel2') --}}
        {{-- <div class="grid md:grid-cols-12">
            <div class="md:col-span-10">
                @include('layouts.mydata.artikel2')
            </div>
            <div class="col-span-2 md:col-span-1">
                @include('layouts.mydata.types')
            </div>
        </div> --}}
        <hr>
        @include('layouts.mydata.main-accordion2')


    </div>

</x-main-layout>
