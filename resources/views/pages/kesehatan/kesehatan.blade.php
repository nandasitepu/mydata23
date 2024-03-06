<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-blue-500 shadow-md shadow-blue-200 text-white py-2">Kesehatan <i class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>
            <div class="flex justify-center p-2">
                <a class=" font-semibold font-mono" href="{{route('data+')}}">
                    <div class="shadow-lg text-white bg-gray-500 border-2 border-black p-2 m-1 text-sm">Data+ <i class="fa fa-database text-white" aria-hidden="true"></i></div>
                </a>
                <a class=" font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Fasilitas Kesehatan <i class="fa fa-hospital text-blue-500" aria-hidden="true"></i></div>
                </a>
                <a class=" font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Obat <i class="fa fa-pills text-red-500" aria-hidden="true"></i></div>
                </a>
                <a class=" font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Tenaga Kesehatan <i class="fa fa-user-md text-green-500" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid md:grid-cols-6 gap-5">
            <div class="col-span-1 md:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Puskesmas / Rumah Sakit <i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Puskesmas</li>
                    <li>Puskesmas Poned</li>
                    <li>Rumah Sakit BPJS</li>
                    <li>Rumah Sakit Non BPJS</li>
                    <li>Rumah Sakit Khusus</li>

                </ol>
            </div>
            <div class="col-span-1 md:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Obat <i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Apotek Klinik / Rumah Sakit</li>
                    <li>Apotek Komunitas (Retail)</li>
                    <li>Apotek Racikan</li>
                    <li>Apotek Perawatan Rumah</li>
                    <li>Toko Obat</li>

                </ol>
            </div>
            <div class="col-span-1 md:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Jasa Kesehatan <i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Dokter</li>
                    <li>Perawat</li>
                    <li>Bidan</li>
                    <li>Terapis</li>
                    <li>Psikolog</li>
                    <li>Caretaker</li>
                    <li>Baby Care</li>
                </ol>
            </div>
        </div>
    </div>

</x-main-layout>
