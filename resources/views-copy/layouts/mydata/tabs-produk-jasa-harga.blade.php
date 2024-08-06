<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
        data-tabs-toggle="#default-styled-tab-content"
        data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
        role="tablist">
        <li role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="newsletter-styled-tab" data-tabs-target="#styled-newsletter" type="button" role="tab"
                aria-controls="newsletter" aria-selected="true">Subscribe</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="produk-styled-tab"
                data-tabs-target="#styled-produk" type="button" role="tab" aria-controls="produk"
                aria-selected="false">Produk</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="jasa-styled-tab" data-tabs-target="#styled-jasa" type="button" role="tab" aria-controls="jasa"
                aria-selected="false">Jasa</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="harga-styled-tab" data-tabs-target="#styled-harga" type="button" role="tab"
                aria-controls="harga" aria-selected="false">Harga</button>
        </li>

    </ul>
</div>

<div id="default-styled-tab-content">
    {{-- Subscribed --}}
    <div class="hidden p-4 rounded-xl border-2" id="styled-newsletter" role="tabpanel"
        aria-labelledby="newsletter">

        <a href="#_" class="relative px-5 py-2 font-medium text-white group">
            <span
                class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-blue-500 group-hover:bg-blue-700 group-hover:skew-x-12"></span>
            <span
                class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-blue-700 group-hover:bg-blue-500 group-hover:-skew-x-12"></span>
            <span
                class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-blue-600 -rotate-12"></span>
            <span
                class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-blue-400 -rotate-12"></span>
            <span class="relative">Follow Media Social Kami</span>
        </a>
        <div class="flex justify-end gap-x-1 h-12">
            <img src="{{ asset('img/social-media/twitter.png') }}" class="p-2 shadow-sm" alt="">
            <img src="{{ asset('img/social-media/instagram.png') }}" class="p-2 shadow-sm" alt="">
            <img src="{{ asset('img/social-media/youtube.png') }}" class="p-2  shadow-sm" alt="">
            <img src="{{ asset('img/social-media/linkedin.png') }}" class="p-2 shadow-sm" alt="">
            <img src="{{ asset('img/social-media/facebook.png') }}" class="p-2 shadow-sm" alt="">
            <img src="{{ asset('img/social-media/whatsapp.png') }}" class="p-2 shadow-sm" alt="">
        </div>
        @include('layouts.mydata.newsletter')
    </div>
    {{-- Produk --}}
    <div class="hidden p-4 rounded-xl border-2" id="styled-produk" role="tabpanel"
        aria-labelledby="produk">
        <p>
            Produk Kami :
        <ul class="list-disc m-5">
            <li>Publikasi (Artikel/Buku/Infografis/dst)</li>
            <li>Direktori Data</li>
            <li>Analisa Data</li>
            <li>Saran untuk Indonesia</li>
        </ul>
        </p>
    </div>
    {{-- Jasa --}}
    <div class="hidden p-4 rounded-xl border-2" id="styled-jasa" role="tabpanel"
        aria-labelledby="jasa">
        <p>
            Jasa Kami :
        <ul class="list-disc m-5">
            <li>Request Data</li>
            <li>Survei</li>
            <li>Olah Data</li>
            <li>Konsultasi</li>
        </ul>
        </p>
    </div>
    {{-- Harga --}}
    <div class="hidden p-4 rounded-xl border-2" id="styled-harga" role="tabpanel"
        aria-labelledby="harga">
        <div class="grid grid-cols-12 gap-1">
            <div class="col-span-6">
                <div class="border border-black p-5 bg-green-400 text-white font-bold">
                    <div class="flex flex-col justify-between h-72">
                        <div>
                            <div class="text-center">
                                <p class="font-mono text-xl font-bold ">
                                    Free
                                </p>
                                <p class="text-sm">Daftar / Lihat / Cobain</p>
                                <div class="my-5 p-2 text-center font-bold animate-pulse">
                                    <a href="#_" class="  border-2 border-white rounded px-5 py-2.5 overflow-hidden group bg-green-400 relative hover:bg-gradient-to-r hover:from-green-300 hover:to-green-200 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">
                                        <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                                        <span class="relative">GRATIS</span>
                                        </a>
                                </div>

                            </div>
                            <ul class="list-disc m-5 text-sm">
                                <li>Akses data publik free kami</li>
                                <li>Baca Artikel /Komentar / dst</li>
                                <li>Boleh Kirim / Minta Data</li>
                            </ul>
                        </div>

                        <div class="p-2 w-full text-center shadow-sm shadow-black font-bold bg-blue-400 text-white">
                            Gabung <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="border border-black p-5">
                    <div class="flex flex-col justify-between h-72">
                        <div>
                            <div class="text-center">
                                <p class="font-mono text-xl font-bold">
                                    Tidak Gratis
                                </p>
                                <p class="text-sm">Untuk yang mau dan mampu</p>
                            </div>
                            <div class="border border-black p-2 text-center font-bold">
                                mulai dari Rp 5000 / selamanya
                            </div>
                            <ul class="list-disc m-5 text-sm">
                                <li>Free ++</li>
                                <li>Data jasa</li>
                                <li>Ads Free</li>
                                <li>Plus Lainnya</li>
                            </ul>
                        </div>

                        <div class="p-2 w-full text-center shadow-sm shadow-black font-bold bg-blue-500 text-white">
                            Selengkapnya <i class="ml-5 fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
