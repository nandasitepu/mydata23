<div
    class="grid sm:grid-cols-1 md:grid-cols-12 gap-4 md:mt-0 bg-gradient-to-r from-green-200 to-blue-200 rounded-b-[400px] mx-2">
    {{-- Top Menu  --}}
    <div class="md:col-span-12 xl:col-span-6">
        @include('layouts.mydata.top-menu2')
    </div>
    {{-- ROBOT IMAGE --}}
    <div class="md:col-span-6 xl:col-span-3">
        <div class="flex items-center justify-center">
            @include('layouts.mydata.carousel-robots')

        </div>
    </div>
    <div class="md:col-span-6 xl:col-span-3">
        <div class="grid grid-cols-12 gap-2">
            {{-- Harga --}}
            <div class="col-span-12">
                @include('layouts.mydata.tabs-produk-jasa-harga')
            </div>
        </div>
    </div>

</div>
