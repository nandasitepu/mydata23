<div class="mx-5">
    <div id="default-carousel" class="relative w-full delay-1000" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-80 rounded-sm ">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                data-carousel-item="">
                <img src="{{ asset('img/bg.jpg') }}" class="block absolute  object-fill h-full w-full" alt="">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                    <p>Pariwisata</p>
                </div>
                <div
                    class="relative w-full top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                    <h5 class="text-sm sm:text-lg font-bold">Danau Toba</h5>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quibusdam ad nobis ex explicabo
                        aspernatur blanditiis, nisi
                    </p>

                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out bg-red-500" data-carousel-item>
                <img src="{{ asset('img/bg2.jpg') }}" class="block absolute  object-fill h-full w-full" alt="">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                    <p>Pariwisata</p>
                </div>
                <div
                    class="relative w-full top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                    <h5 class="text-sm sm:text-lg font-bold">Danau Sentarum</h5>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quibusdam ad nobis ex explicabo
                        aspernatur blanditiis, nisi
                    </p>

                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out bg-green-500" data-carousel-item>
                <img src="{{ asset('img/bg3.jpg') }}" class="block absolute  object-fill h-full w-full" alt="">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 border-2 bg-black border-white text-white px-5">
                    <p>Pariwisata</p>
                </div>
                <div
                    class="relative w-2/3 top-20 sm:top-1/2 px-10 py-2 opacity-100 border-2 bg-white sm:-translate-y-1/2 ">
                    <h5 class="text-sm sm:text-lg font-bold">Mimi Land</h5>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quibusdam ad nobis ex explicabo
                        aspernatur blanditiis, nisi
                    </p>

                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-2 justify-center space-x-5 left-1/2 -translate-x-1/2 z-30 ">
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
