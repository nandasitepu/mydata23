<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl
            bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%
            shadow-md shadow-gray-900 text-white py-2">Data+ <i class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>

        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid sm:grid-cols-5 gap-5 text-center">
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/menu/hukum.png') }}" alt="mydata_pendidikan">
                    </figcaption>
                    <a href="{{ route('hukum') }}">
                        <x-secondary-button  class="bg-white mt-5">
                            Hukum
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/menu/pendidikan.png') }}" alt="mydata_pendidikan">
                    </figcaption>
                    <a href="{{ route('pendidikan') }}">
                        <x-secondary-button  class="bg-white mt-5">
                            Pendidikan
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/menu/kesehatan.png') }}" alt="mydata_kesehatan">
                    </figcaption>
                    <a href="{{ route('kesehatan') }}">
                        <x-secondary-button  class="bg-white mt-5">
                            Kesehatan
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/investasi.png') }}" alt="mydata_investasi">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            Investasi
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/pertanian.png') }}" alt="mydata_pertanian">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            pertanian
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/perikanan.png') }}" alt="mydata_perikanan">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            perikanan
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/perternakan.png') }}" alt="mydata_perternakan">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            perternakan
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/pabrik.png') }}" alt="mydata_pabrik">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            pabrik
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
            <div class="col">
                <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                    <figcaption class="flex items-center justify-center">
                        <img class="rounded-lg w-20" src="{{ asset('/img/data-plus/pariwisata.png') }}" alt="mydata_pariwisata">
                    </figcaption>
                    <a href="#">
                        <x-secondary-button  class="bg-white mt-5">
                            pariwisata
                        </x-secondary-button>
                    </a>
                </figure>
            </div>
        </div>
    </div>

</x-main-layout>
