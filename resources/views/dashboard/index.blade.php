{{-- Main Dashboard --}}
<x-dashboard-layout>
    <aside>
        {{-- Hidden Sidemenu --}}
        {{-- @include('components.menu.side-menu') --}}
    </aside>
    {{-- CARDS --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div class="border-2 border-dashed border-gray-300 rounded-lg bg-gray-100 dark:border-gray-600 p-5">
            <p class="text-3xl font-bebas">Hukum</p>
            <ol class="list-none ml-5">
                <li>
                    <div class="flex justify-between my-2">
                        <a href="{{ Route('dashboard.peraturan') }}">
                            <button class="p-1  text-blue-500 font-semibold">Peraturan</button>
                        </a>
                        <div>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                1752
                            </button>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Lembaga</button>
                        <div>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                {{mt_rand(1000, 2000)}}
                            </button>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Praktisi</button>
                        <div>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                1752
                            </button>
                            <button class="text-xs border-2 border-black p-1 shadow-xl">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </li>
            </ol>

        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 bg-yellow-200  dark:border-gray-600  p-5">
            <p class="text-3xl font-bebas">Pendidikan</p>
            <ol class="list-none ml-5">
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Pustaka</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>

                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Sekolah</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Jasa</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
            </ol>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 bg-blue-200  dark:border-gray-600  p-5">
            <p class="text-3xl font-bebas">Kesehatan</p>
            <ol class="list-none ml-5">
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Obat</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>

                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Faskes</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Jasa</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
            </ol>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 bg-green-300 dark:border-gray-600  p-5">
            <div class="flex justify-between">
                <p class="text-3xl font-bebas">
                    Data +
                </p>
                <span class="fa-stack fa-1x">
                    <i class="fa-solid fa-camera fa-stack-1x"></i>
                    <i class="fa-solid fa-ban fa-stack-1x" style="color:Tomato"></i>
                </span>
            </div>

            <ol class="list-none ml-5">
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Data 1 </button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>

                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Data 2</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
                <li>
                    <div class="flex justify-between my-2">
                        <button class="p-1">Data 3</button>
                        <button class="text-xs border-2 border-black p-1 shadow-xl">1752</button>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <hr>
    {{-- CHARTS --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        {{-- @include('components.charts.sample') --}}
    </div>
    <hr>
    {{-- TABLES --}}
    <div class=" mb-4">
        {{-- @include('components.tables.sample') --}}
    </div>
</x-dashboard-layout>
