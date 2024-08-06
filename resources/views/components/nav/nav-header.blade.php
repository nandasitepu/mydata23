<div class="bg-gradient-to-r from-green-200 to-blue-200 rounded-t-xl mx-2">
    <div class="grid grid-cols-1 xl:grid-cols-12 mx-5 gap-2 shadow-sm ">
        {{-- Col1 --}}
        <div class="col xl:col-span-6 text-center font-xl  rounded-xl m-5">
            <div>
                {{--  --}}
                <div>
                    <div>
                        <a href="/" class="flex justify-center items-center">
                            <img class="h-16 border-4 border-red-500 rounded-lg"
                                src="{{ asset('/img/logo/MY-trans.png') }}">
                            <div class="text-6xl font-bebas px-3">
                                DATA.ID</div>
                        </a>
                        <div>
                            <p class="capitalize text-sm font-semibold my-2"> DAFTAR - GABUNG - LIHAT - NIKMATI </p>
                        </div>
                    </div>

                </div>
                {{--  --}}

                {{--  --}}
                <div class="grid grid-cols-3 my-2">
                    <div class="mx-2">
                        <x-buttons.hover-black href="{{ route('redirect') }}">
                            <p class=""> Login</p>
                        </x-buttons.hover-black>
                    </div>
                    <div>
                        <x-buttons.hover-green href="{{ route('redirect') }}"
                            img="{{ asset('/img/data-plus/log-in.png') }}">
                            Gratis
                            </x-buttons.hover-black>

                    </div>
                    <div class="mx-2">
                        <x-buttons.hover-black href="{{ route('redirect') }}">
                            <img class="w-8 h-7 p-1" src="{{ asset('/img/data-plus/google-symbol.png') }}">
                        </x-buttons.hover-black>
                    </div>


                </div>
            </div>

        </div>

        {{-- Col2 --}}
        <div class="col xl:col-span-3 font-xl">
            <div class=" ">
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
        </div>
        {{-- Col3 --}}
        <div class="col xl:col-span-3 center my-auto">
            {{-- Buttons --}}
            <div class="flex items-center justify-center">
                <x-buttons.hover-white href="#"> Data + </x-buttons.hover-white>
                <x-buttons.hover-white href="#"> Terbaru </x-buttons.hover-white>
                <x-buttons.hover-white href="#"> Terpopuler </x-buttons.hover-white>
                <x-buttons.hover-white href="#"> Terbaik </x-buttons.hover-white>
            </div>
        </div>
    </div>
</div>
