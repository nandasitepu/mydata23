<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-blue-500 shadow-md shadow-blue-200 text-white py-2">Kesehatan <i class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>
            <div class="flex justify-end p-2">
                <a class="text-black font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Rumah Sakit / Puskesmas <i class="fa fa-hospital text-gray-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-yellow-700 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Apotek <i class="fa fa-pills text-red-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-green-500 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Jasa Kesehatan <i class="fa fa-user-md text-black" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid sm:grid-cols-3 gap-5 text-center">
            <div class="col">
                Rumah Sakit / Puskesmas
            </div>
            <div class="col">
                Apotek
            </div>
            <div class="col">
                Jasa Kesehatan
            </div>
        </div>
    </div>

</x-main-layout>
