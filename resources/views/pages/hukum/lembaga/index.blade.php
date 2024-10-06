<x-main-layout>

    <div class="mx-5">
        {{-- Header --}}
        <div>
            @include('pages.hukum.header')
        </div>
        {{-- Lembaga Penegak Hukum--}}
        <div class="grid md:grid-cols-12 gap-5">
            <div class="col md:col-span-4 bg-white md:mt-20 p-5 rounded-xl">
                <p class="text-xl bg-yellow-800 text-white border-2 border-black px-5 rounded-xl">Kepolisian</p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nemo repellendus sit voluptates voluptatum ipsum quis laudantium, perferendis autem minus voluptate alias ut. Amet a quisquam iste ducimus odio natus.
                @include('pages.hukum.lembaga.provinsi')
            </div>
            <div class="col md:col-span-4 bg-white md:mt-20 p-5 rounded-xl">
                <p class="text-xl bg-green-800 text-white border-2 border-black px-5 rounded-xl">Kejaksaan</p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nemo repellendus sit voluptates voluptatum ipsum quis laudantium, perferendis autem minus voluptate alias ut. Amet a quisquam iste ducimus odio natus.
               @include('pages.hukum.lembaga.provinsi')
            </div>
            <div class="col md:col-span-4 bg-white md:mt-20 p-5 rounded-xl">
                <p class="text-xl bg-gray-800 text-white border-2 border-black px-5 rounded-xl">Kehakiman</p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nemo repellendus sit voluptates voluptatum ipsum quis laudantium, perferendis autem minus voluptate alias ut. Amet a quisquam iste ducimus odio natus.
                @include('pages.hukum.lembaga.provinsi')
            </div>
        </div>
    </div>
</x-main-layout>
