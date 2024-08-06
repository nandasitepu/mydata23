<div class="shadow-md border-2 border-black grid grid-cols-12 rounded-xl mb-5">
    <div class="col-span-12 sm:col-span-8 hidden sm:block">
        @include('layouts.mydata.menu-data')
    </div>

    <div class="col-span-12 sm:col-span-4 text-center font-mono p-5">
        {{-- <div class="flex justify-end items-center"><img class="w-20 mb-3" src="{{ asset('/img/linktree-qr.png') }}"></div> --}}
        <a href="{{ route('permintaan') }}">
            <button type="button" class="text-left w-full py-1 mb-3 px-4 bg-gray-200 border-2 shadow-xl border-black">
                Minta Data <i class="fa fa-download float-right py-1" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('permintaan') }}">
            <button type="button" class="text-left w-full py-1 mb-3 px-4 bg-red-200 border-2 shadow-xl border-black">
                Kirim Data <i class="fa fa-paper-plane float-right py-1" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('komentar-kritik-saran') }}">
            <button type="button"
                class=" text-left w-full py-1 mb-3 px-4 bg-yellow-200 border-2 shadow-xl border-black">
                Komentar <i class="fa fa-comment float-right py-1" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('statistik') }}">
            <button type="button"
                class=" text-left w-full py-1 mb-3 px-4 bg-green-200 border-2 shadow-xl border-black">
                Statistik <i class="fa fa-line-chart float-right py-1" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('tentang-kami') }}">
            <button type="button" class=" text-left w-full py-1 mb-3 px-4 bg-blue-200 border-2 shadow-xl border-black">
                Tentang Kita <i class="fa fa-info-circle float-right py-1" aria-hidden="true"></i>
            </button>
        </a>
    </div>

</div>



