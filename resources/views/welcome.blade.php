<x-main-layout>
    {{-- Main Hukum --}}
    <div class="sm:m-5">
        {{-- The Menu --}}
        {{-- @include('layouts.mydata.top-menu') --}}

        <div>
            @include('layouts.mydata.main-accordion')
            {{-- hidden sidemenu --}}
            <div class="block md:hidden">
                @include('dashboard.menu.side-menu')
            </div>
        </div>


        <div class="bg-gray-100 rounded-xl">
            @include('layouts.mydata.main-accordion2')
        </div>


    </div>

</x-main-layout>
