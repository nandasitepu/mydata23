<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl
            bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%
            shadow-md shadow-gray-900 text-white py-2">Data+ <i class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>

        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid sm:grid-cols-5 gap-5 text-center">
            <div class="col">
                <div class="text-center">
                    <img class="rounded-lg" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">
                    <a href="{{route('hukum')}}">
                        <div class="px-2 m-1 shadow-md border-2 border-black">Hukum</div>
                    </a>
                </div>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="{{route('pendidikan')}}">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Pendidikan</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="{{route('kesehatan')}}">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Kesehatan</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Investasi</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Pertanian</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Perikanan</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Peternakan</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Industri</div>
                </a>
            </div>
            <div class="col">
                <img class="rounded-lg w-full" src="{{ asset('\img\menu\chart.png') }}" alt="mydata_chart">

                <a href="#">
                    <div class="px-2 m-1 shadow-md border-2 border-black">Pariwisata</div>
                </a>
            </div>
        </div>
    </div>

</x-main-layout>
