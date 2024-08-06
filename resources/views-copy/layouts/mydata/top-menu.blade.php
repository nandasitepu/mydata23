<div class="grid sm:grid-cols-1 xl:grid-cols-12 gap-4 md:mt-0 bg-gradient-to-r from-green-200 to-blue-200 rounded-b-[400px] mx-2">
    <div class="xl:col-span-6">
        {{-- Top Menu  --}}
        {{-- @include('layouts.mydata.carousel') --}}
        @include('layouts.mydata.top-menu2')

        {{-- Buttons --}}
        <div>
            <a href="#_"
                class="relative inline-flex items-center justify-center  px-6 py-1 overflow-hidden font-medium text-black bg-white transition duration-300 ease-out border-2 border-black  shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-500 -translate-x-full bg-black group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease">Data
                    +</span>
                <span class="relative invisible text-sm">Data +</span>
            </a>

            <a href="#_"
                class="relative inline-flex items-center justify-center  px-6 py-1 overflow-hidden font-medium text-black bg-white transition duration-300 ease-out border-2 border-black  shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-500 -translate-x-full bg-black group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease">Terbaru</span>
                <span class="relative invisible text-sm">Terbaru</span>
            </a>

            <a href="#_"
                class="relative inline-flex items-center justify-center  px-6 py-1 overflow-hidden font-medium text-black bg-white transition duration-300 ease-out border-2 border-black  shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-500 -translate-x-full bg-black group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease">Terpopuler</span>
                <span class="relative invisible text-sm">Terpopuler</span>
            </a>
            <a href="#_"
                class="relative inline-flex items-center justify-center  px-6 py-1 overflow-hidden font-medium text-black bg-white transition duration-300 ease-out border-2 border-black  shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-500 -translate-x-full bg-black group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full text-black transition-all duration-300 transform group-hover:translate-x-full ease">User Baru</span>
                <span class="relative invisible text-sm">User Baru</span>
            </a>
        </div>
        {{-- Quotes --}}

        <div class="mx-auto my-5 shadow-[rgba(0,0,15,0.5)_5px_5px_4px_0px] p-5 ">
            <blockquote>
                <p class="font-bold">“Data are just summaries of thousands of stories – tell a few of those stories to help make the data meaningful.” – Chip & Dan Heath</p>
            </blockquote>
        </div>

    </div>
    <div class="xl:col-span-3">
        <div >
            <img class="h-50" src="{{ asset('/img/robot-splash-nobg-new.png') }}" alt="">
        </div>
    </div>
    <div class="xl:col-span-3">
        <div class="grid grid-cols-12 gap-2">

            {{-- Harga --}}
            <div class="col-span-12">
                {{-- @include('layouts.mydata.accordion-harga') --}}
                @include('layouts.mydata.tabs-produk-jasa-harga')
            </div>
        </div>
    </div>

</div>
