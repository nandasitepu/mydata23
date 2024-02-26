<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-gray-200 py-2">Hukum <i class="fa fa-balance-scale text-black" aria-hidden="true"></i></div>
            <div class="flex justify-end p-2">
                <a class="text-black font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Peraturan <i class="fa fa-book text-gray-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-yellow-700 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Penegak Hukum <i class="fa fa-crosshairs text-red-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-green-500 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Jasa Advokat <i class="fa fa-user-secret text-black" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid grid-cols-12 gap-5 ">
            <div class="col-span-3">
                <div class="mb-2">Pencarian Spesifik</div>
                {{-- Pencarian --}}
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <input type="text" id="jenis"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="jenis">
                    </div>
                    <div class="mb-5">
                        <input type="text" id="nomor"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="nomor">
                    </div>
                    <div class="mb-5">
                        <input type="text" id="tentang"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="tentang">
                    </div>

                    <div class="mb-5">
                        <input type="text" id="tahun"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="tahun">
                    </div>

                    <div class="mb-5">
                        <input type="text" id="status"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="status">
                    </div>

                </form>
                <button type="button" class="text-black border-2 border-black p-2 w-20 text-sm">Cari</button>
                <button type="button" class="text-black border-2 border-black p-2 w-20 text-sm">Reset</button>
                {{-- Statistik Peraturan --}}

            </div>
            <div class="col-span-9">
                <div class="text-right text-sm text-gray-400 mb-2 pb-1">ditampilkan 1-10 dari 500 data</div>
                <div class="border border-black p-5">
                    <div class="py-3 border-b-2 border-black flex justify-between">
                        <p class="text-lg text-blue-600 font-bold">UU</p>
                        <p class="text-lg text-black font-bold">2024</p>
                    </div>

                    <div class="py-3 ">
                        Undang-Undang Nomor 1 Tahun 2024
                    </div>

                    <div class="py-3 border-b border-black border-dashed">
                        Perubahan Atas Undang-undang Nomor 3 Tahun 2022 Tentang Ibu Kota Negara
                    </div>

                    <div class="py-3 flex justify-between">
                        <div>
                            <div>
                                <div>Tag:</div>
                                <div class="justify-center my-2">
                                    <button class="px-3 mx-1 bg-blue-500 text-white text-sm shadow-md">Primary</button>
                                    <button class="px-3 mx-1 bg-blue-500 text-white text-sm shadow-md">Alert</button>
                                    <button class="px-3 mx-1 bg-blue-500 text-white text-sm shadow-md">Danger</button>
                                    <button class="px-3 mx-1 bg-blue-500 text-white text-sm shadow-md">Primary</button>
                                    <button class="px-3 mx-1 bg-blue-500 text-white text-sm shadow-md">Alert</button>
                                </div>
                            </div>
                        </div>
                        <div>Status:
                            <button class="px-3 mx-1 bg-green-500 text-white text-sm shadow-md">Berlaku</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-main-layout>
