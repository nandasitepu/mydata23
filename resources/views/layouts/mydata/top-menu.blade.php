<div class="text-2xl text-left px-5  border-black border-2 mx-5 ">
    <div class="mt-2 font-bold font-mono">Topik</div>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 py-5">
        <div class="col">
            <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-lg w-20" src="{{ asset('\img\menu\hukum.png') }}" alt="mydata_hukum">
                </figcaption>

                <a href="{{ route('hukum') }}">
                    <x-secondary-button class="bg-white mt-5">
                        Hukum
                    </x-secondary-button>
                </a>
            </figure>
        </div>
        <div class="col">
            <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2">
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-lg w-20" src="{{ asset('\img\menu\pendidikan.png') }}" alt="mydata_pendidikan">
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
                    <img class="rounded-lg w-20" src="{{ asset('\img\menu\kesehatan.png') }}" alt="mydata_kesehatan">
                </figcaption>
                <a href="{{ route('kesehatan') }}">
                    <x-secondary-button  class="bg-white mt-5">
                        Kesehatan
                    </x-secondary-button>
                </a>
            </figure>
        </div>
        <div class="col">
            <figure class="flex flex-col items-center justify-center p-8 text-center border-gray-200 border-2 ">
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-lg w-20" src="{{ asset('\img\menu\publik.png') }}" alt="mydata_bisnis">
                </figcaption>
               <a href="{{ route('data+') }}">
                    <x-secondary-button  class="bg-white mt-5">
                        DATA+
                    </x-secondary-button>
               </a>
            </figure>
        </div>

    </div>
</div>
