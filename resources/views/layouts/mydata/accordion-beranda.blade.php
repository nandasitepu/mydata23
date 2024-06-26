{{-- Beranda --}}
<!-- Accordion component -->
<div class=" mx-5">
    <!-- Accordion Beranda -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button id="faqs-title-01" type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2  px-5 shadow-black shadow-sm"
                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01">
                <span class="font-mono">Beranda</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1"
                        class="transform origin-center transition duration-200 ease-out"
                        :class="{ '!rotate-180': expanded }" />
                    <rect y="7" width="16" height="2" rx="1"
                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                        :class="{ '!rotate-180': expanded }" />
                </svg>
            </button>
        </h2>
        <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
            <div class="overflow-hidden">
                <p class="pb-3">
                    @include('layouts.mydata.top-menu')
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion Produk dan Jasa -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button id="faqs-title-02" type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2 px-5 shadow-red-500 shadow-sm"
                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-02">
                <span>Produk / Jasa / Harga </span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1"
                        class="transform origin-center transition duration-200 ease-out"
                        :class="{ '!rotate-180': expanded }" />
                    <rect y="7" width="16" height="2" rx="1"
                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                        :class="{ '!rotate-180': expanded }" />
                </svg>
            </button>
        </h2>
        <div id="faqs-text-02" role="region" aria-labelledby="faqs-title-02"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
            <div class="overflow-hidden">
                <p class="pb-3 ">
                    {{-- Produk dan Jasa --}}
                <div class="grid md:grid-cols-4 gap-5">
                    {{-- Subscription  --}}
                    <div class="border border-black p-5">

                        <div class="flex flex-col justify-between h-72">
                            <div>
                                <p class="font-mono text-xl font-bold">
                                    Pengguna Biasa
                                </p>
                                <p>Cuma Liat-Liat</p>
                                <div class="border border-black p-2 text-center font-bold">
                                    Rp 5000 / selamanya
                                </div>
                                <ul class="list-disc m-5">
                                    <li>Akses data publik kami</li>
                                    <li>Boleh komentar</li>
                                    <li>Boleh Kirim/Minta Data/Pesan</li>
                                </ul>
                            </div>

                            <div class="p-2 w-1/2 text-center shadow-sm shadow-black font-bold bg-blue-500 text-white">
                                Gabung <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                            </div>
                        </div>


                    </div>
                    {{--  --}}
                    <div class="border border-black p-5">
                        <div class="flex flex-col justify-between h-72">
                           <div>
                                <p class="font-mono text-xl font-bold">Pengguna Super</p>
                                <p>Butuh Data</p>
                                <div class="border border-black p-2 text-center font-bold">
                                    <span class="line-through decoration-red-500 decoration-2">Rp 25.000</span> Rp 10.000 / tahun
                                </div>
                                <ul class="list-disc m-5">
                                    <li>Akses data publik +</li>
                                    <li>Data set +</li>
                                    <li>Papan Data (Dashboard) + </li>
                                    <li>Bebas Iklan</li>
                                </ul>
                           </div>
                            <div class="p-2 w-1/2 text-center shadow-sm shadow-black font-bold">
                                Gabung <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="border border-black p-5">
                        <div class="flex flex-col justify-between h-72">
                            <div>
                                <p class="font-mono text-xl font-bold">Data Agen</p>
                                <p>Pengen Bantu Cari Data</p>
                                <div class="border border-black p-2 text-center font-bold">
                                    <span class="line-through decoration-red-500 decoration-2">Rp 50.000</span> Rp 25.000 / tahun
                                </div>
                                <ul class="list-disc m-5">
                                    <li>Akses semua data publik kami +</li>
                                    <li>Papan Data (Dashboard) </li>
                                    <li>Bebas Iklan</li>
                                    <li>Kontributor (sosial/dibayar)</li>
                                </ul>
                            </div>
                            <div class="p-2 w-1/2 text-center shadow-sm shadow-black font-bold">
                                Gabung <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="border border-black p-5">
                        <div class="flex flex-col justify-between h-72">
                            <div>
                                <p class="font-mono text-xl font-bold">Data Manager</p>
                                <p>
                                    Siap Kelola Data Keluar - Masuk
                                </p>
                                <div class="border border-black p-2 text-center font-bold">
                                    Rp 100.000 / tahun
                                </div>
                                <ul class="list-disc m-5">
                                    <li>Akses semua data publik kami +</li>
                                    <li>Papan Data (Dashboard)</li>
                                    <li>Bebas Iklan</li>
                                    <li>Data Kontributor</li>
                                    <li>Data Seller</li>
                                </ul>
                            </div>
                            <div class="">
                                <div
                                    class="p-2 w-1/2 text-center shadow-sm shadow-black font-bold">
                                    Gabung <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End: Accordion component -->
