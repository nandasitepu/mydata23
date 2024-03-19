<div class="grid sm:grid-cols-5 gap-5 text-center ">
    <div class="col sm:col-span-3 sm:text-left my-2">
        <a href="{{ route('permintaan') }}">
            <button type="button"
                class=" w-full py-3 px-4 my-1  bg-red-200 border-2 shadow-xl border-black">
                Permintaan Data <i class="fa-solid fa-databases" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('komentar-kritik-saran') }}">
            <button type="button"
                class=" w-full py-3 px-4 my-1  bg-yellow-200 border-2 shadow-xl border-black">
                Komentar / Kritik / Saran
            </button>
        </a>
        <a href="{{ route('statistik') }}">
            <button type="button"
                class=" w-full py-3 px-4 my-1  bg-green-200 border-2 shadow-xl border-black">
                Statistik Kami
            </button>
        </a>
        <a href="{{ route('tentang-kami') }}">
            <button type="button"
                class=" w-full py-3 px-4 my-1  bg-blue-200 border-2 shadow-xl border-black">
                Tentang Kami
            </button>
        </a>
    </div>
    <div class="col sm:col-span-2 hidden sm:block">
        {{-- <div class="font-bold text-center text-xl border-y-2 border-black">SCAN ME</div> --}}
        <img class="p-10 sm:p-5" src="{{ asset('/img/linktree-qr.png') }}">
    </div>
</div>
