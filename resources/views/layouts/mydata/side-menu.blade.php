<div class="flex">
    <div>
        <a href="{{ route('permintaan') }}">
            <button type="button"
                class="w-3/4 py-3 px-4 my-1 inline-flex items-center bg-red-200 border-2 shadow-xl border-black">
                Permintaan Data <i class="fa-solid fa-databases" aria-hidden="true"></i>
            </button>
        </a>
        <a href="{{ route('komentar-kritik-saran') }}">
            <button type="button"
                class="w-3/4 py-3 px-4 my-1 inline-flex items-center bg-yellow-200 border-2 shadow-xl border-black">
                Komentar / Kritik / Saran
            </button>
        </a>
        <a href="{{ route('statistik') }}">
            <button type="button"
                class="w-3/4 py-3 px-4 my-1 inline-flex items-center bg-green-200 border-2 shadow-xl border-black">
                Statistik Kami
            </button>
        </a>
        <a href="{{ route('tentang-kami') }}">
            <button type="button"
                class="w-3/4 py-3 px-4 my-1 inline-flex items-center bg-blue-200 border-2 shadow-xl border-black">
                Tentang Kami
            </button>
        </a>
    </div>
    <div class="w-1/2">
        <div class="font-bold text-center">SCAN ME</div>
        <img src="{{ asset('/img/linktree-qr.png') }}">
    </div>
</div>
