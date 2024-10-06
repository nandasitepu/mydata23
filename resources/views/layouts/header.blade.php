{{-- Log in User Header --}}
@auth
    <div class="relative z-40 mb-32">
        <nav class="p-1 fixed left-0 right-0 top-0 bg-green-100">
            <div class="flex flex-col sm:flex-row justify-between items-center border-1 border-black shadow-[rgba(0,0,15,0.5)_5px_5px_4px_0px] px-5"
                id="logo-bar">
                {{-- Left / Site Logo --}}
                <div class="p-2">
                    <a href="/" class="flex justify-center ">
                        <img class="h-12 p-1 bg-red-300" src="{{ asset('/img/logo/MY.png') }}">
                        <span class="text-4xl p-2 font-bebas"> DATA.ID</span>
                    </a>
                </div>
                {{-- Center Header/ Menu --}}
                <x-nav.nav-center></x-nav.nav-center>
                {{-- Right Header/ User Menu --}}
                <div class="flex items-center gap-6">
                    {{-- Button Small Screen --}}
                    <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr text-gray-600 rounded-lg cursor-pointer block md:hidden">

                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>

                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <x-nav.nav-notif></x-nav.nav-notif>
                    <x-nav.nav-apps></x-nav.nav-apps>
                    <x-nav.nav-user></x-nav.nav-user>
                </div>

            </div>
        </nav>
    </div>
    @slot('scripts')
        <script>
            var lastScrollTop;
            navbar = document.getElementById('logo-bar');
            window.addEventListener('scroll', function() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > lastScrollTop) {
                    navbar.style.top = '-90px';
                } else {
                    navbar.style.top = '0';
                }
                lastScrollTop = scrollTop;
            });
        </script>
    @endslot
@endauth

{{-- Guest Heaader --}}
@guest
    <div class="my-5">
        <div class="grid grid-cols-1 xl:grid-cols-12 mx-5 gap-2 shadow-sm ">
            {{-- Logo / Login --}}
            <div class="col xl:col-span-6 text-center font-xl rounded-xl m-5 ">
                {{-- Logo --}}
                <div>
                    <a href="/" class="flex justify-center items-center">
                        <img class="h-16 border-4 border-red-500 rounded-lg" src="{{ asset('/img/logo/MY-trans.png') }}">
                        <div class="text-6xl font-bebas px-3">
                            DATA.ID</div>
                    </a>
                    <div>
                        <p class="capitalize text-sm font-semibold my-2"> DAFTAR - GABUNG - LIHAT - NIKMATI </p>
                    </div>
                </div>

                {{-- Guest Only / Not login --}}
                <div class="flex justify-center justify-items-center my-2 ">
                    <div class="mx-2">
                        <x-buttons.hover-black href="{{ route('login') }}">
                            <img class="w-8 h-7" src="{{ asset('/img/data-plus/log-in.png') }}">
                            <p class="p-1 font-bold">Log in</p>
                        </x-buttons.hover-black>
                    </div>
                    <div>
                        <x-buttons.hover-black href="{{ route('register') }}">
                            <img class="w-8 h-7" src="{{ asset('/img/data-plus/merahputih.png') }}">
                            <p class="p-1 font-bold">Gabung</p>
                        </x-buttons.hover-black>
                    </div>
                    <div class="mx-2">
                        <x-buttons.hover-black href="{{ route('redirect') }}">
                            <img class="w-8 h-7" src="{{ asset('/img/data-plus/google-symbol.png') }}">
                            <p class="p-1 font-bold">ratis</p>
                        </x-buttons.hover-black>
                    </div>
                </div>
            </div>

            {{-- Quotes --}}
            <div class="col  xl:col-span-3 font-xl">
                {{-- Quotes --}}
                <div class="mx-auto my-5 shadow-[rgba(0,0,15,0.5)_5px_5px_4px_0px] p-5">
                    <blockquote>
                        <p class="italic">“It is a capital mistake to theorize before one has data. Insensibly one
                            begins to twist facts to suit theories, instead of theories to suit facts.” </p>
                        <p class="font-semibold">
                            - Sherlock
                            Holmes
                        </p>
                    </blockquote>
                </div>
                <p class="text-sm italic">Data Indonesia tervalidasi, tersajikan rapi untuk <strong>Anda</strong></p>

            </div>
            {{-- Buttons Data+ --}}
            <div class="col xl:col-span-3 center my-auto">
                {{-- Buttons --}}
                <div class="grid grid-cols-auto gap-5">
                    <x-buttons.hover-white href="#"> Data + </x-buttons.hover-white>
                    <x-buttons.hover-white href="#"> Terbaru </x-buttons.hover-white>
                    <x-buttons.hover-white href="#"> Terpopuler </x-buttons.hover-white>
                    <x-buttons.hover-white href="#"> Terbaik </x-buttons.hover-white>
                </div>
            </div>
        </div>
    </div>
@endguest