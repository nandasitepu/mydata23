<div class="mx-5">
    <div id="default-carousel" class="relative w-full " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden transition duration-[2000ms]  " data-carousel-item="">
                <img src="{{ asset('img/bg.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                    <p>Pariwisata</p>
                </div>
                <div
                    class="relative w-full top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                    <h5 class="text-sm sm:text-lg font-bold">Danau Toba</h5>
                    <p class="text-xs sm:text-sm">
                        Danau Toba terbentuk sebagai akibat dari letusan gunung berapi super masif berkekuatan VEI 8
                        sekitar 69.000 sampai 77.000 tahun yang lalu yang memicu perubahan iklim global. Metode
                        penanggalan terkini yang berakurat menetapkan letusan tersebut terjadi sekitar 74.000 tahun yang
                        lalu. Letusan ini merupakan letusan eksplosif terbesar di Bumi dalam 25 juta tahun terakhir.

                    </p>

                </div>

            </div>
            <!-- Item 2 -->
            <div class="hidden transition duration-[2000ms] " data-carousel-item>
                <img src="{{ asset('img/bg2.jpg') }}" class="block absolute  object-fill h-full w-full" alt="">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                    <p>Pariwisata</p>
                </div>
                <div
                    class="relative w-full top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                    <h5 class="text-sm sm:text-lg font-bold">Danau Sentarum</h5>
                    <p class="text-xs sm:text-sm">
                        Danau Sentarum adalah danau musiman yang berada di Kapuas Hulu, Kalimantan Barat. Danau ini
                        dipenuhi air selama 10 bulan setiap tahunnya, dan sisanya akan surut, membentuk kolam-kolam
                        kecil yang berisi ikan-ikan kecil. Saat kemarau, Air Danau Sentarum memasok setengah dari aliran
                        air Sungai Kapuas. Luas keseluruhan danau ini 132.000 Ha.
                    </p>
                </div>
            </div>
                  <!-- Item 3 -->
                  <div class="hidden transition duration-[2000ms]" data-carousel-item>
                    <img src="{{ asset('img/robot-removebg-preview.png') }}" class="block absolute  object-fill h-full w-full" alt="">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                        <p>Pariwisata</p>
                    </div>
                    <div
                        class="relative w-full top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                        <h5 class="text-sm sm:text-lg font-bold">Danau Sentarum</h5>
                        <p class="text-xs sm:text-sm">

                        </p>
                    </div>
                </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2  bottom-10 mb-5 left-1/2 space-x-3 rtl:space-x-reverse">

            <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Join MyData</button>

            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Login</button>




        </div>
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-2 h-2 bg-black border-black" aria-current="false" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-2 h-2" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-2 h-2" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>

        </div>

        <!-- Slider controls -->
        <button type="button" class="flex absolute bottom-0 left-0 z-30 border-2 border-white" data-carousel-prev>
            <span class="fa-stack fa-1x border border-black bg-black">
                <i class="fa fa-arrow-left text-white" aria-hidden="true"></i>
            </span>
        </button>
        <button type="button" class="flex absolute bottom-0 right-0 z-30 border-2 border-white" data-carousel-next>
            <span class="fa-stack fa-1x border border-black bg-black">
                <i class="fa fa-arrow-right text-white" aria-hidden="true"></i>
            </span>
        </button>
    </div>
</div>
