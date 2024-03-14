<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        {{-- Header --}}
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-gray-700 shadow-md shadow-gray-200 text-white py-2 rounded-md">Hukum <i
                    class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>
            <div class="flex justify-end p-2">
                <a class="text-black font-semibold font-mono" href="{{route('peraturan.index')}}">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Peraturan <i
                            class="fa fa-book text-gray-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-yellow-700 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Penegak Hukum <i
                            class="fa fa-crosshairs text-red-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-green-500 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Jasa Legal <i
                            class="fa fa-user-secret text-black" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
        {{-- Cards --}}
        <div class="my-2 py-2 grid grid-cols-1 sm:grid-cols-6 sm:gap-5 font-mono">
            <div class="col-span-1 sm:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Peraturan <i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">

                    <li>Undang-Undang Dasar 1945</li>
                    <li>Undang-Undang</li>
                    <li>Peraturan Pemerintah</li>
                    <li>Peraturan Presiden</li>
                    <li>Peraturan Daerah</li>
                    <li>Peraturan Gubernur</li>
                    <li>Peraturan Bupati / Walikota</li>
                    <li>Peraturan Desa</li>
                </ol>
                <br>
                <hr>
                Peraturan Spesifik
                <hr>
            </div>
            <div class="col-span-1 sm:col-span-2 p-5 bg-blue-100">
                <p class="text-2xl font-semibold"> Penegak Hukum <i class="fa fa-users text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>
                        Pengadilan
                        <ol class="list-disc ml-10">
                            <li>Pengadilan Negeri</li>
                            <li>Pengadilan Tinggi</li>
                            <li>Mahkamah Agung</li>
                            <li>Pengadilan Agama</li>
                            <li>Pengadilan Tindak Pidana Korupsi</li>
                            <li>Mahkamah Konstitusi</li>
                        </ol>
                    </li>
                    <hr>
                    <li>Kejaksaan
                        <ol class="list-disc ml-10">
                            <li>Kejaksaan Negeri</li>
                            <li>Kejaksaan Tinggi</li>
                            <li>Kejaksaan Agung</li>
                        </ol>
                    </li>
                    <hr>
                    <li>
                        Kepolisian
                        <ol class="list-disc ml-10">
                            <li>Bhayangkara Pembina Keamanan dan Ketertiban Masyarakat</li>
                            <li>Kepolisian Sektor</li>
                            <li>Kepolisian Resor</li>
                            <li>Kepolisian Daerah</li>
                            <li>Kepolisian Republik Indonesia</li>
                        </ol>
                    </li>
                    <hr>
                    <li>Advokat</li>
                </ol>
            </div>
            <div class="col-span-1 sm:col-span-2 p-5 bg-yellow-100">
                <p class="text-2xl font-semibold">Jasa Legal <i class="fa fa-address-book text-gray-500 float-right" aria-hidden="true"></i></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Notaris</li>
                    <li>Pejabat Pembuat Akta Tanah</li>
                    <li>Layanan Konsultasi Hukum</li>
                    <li>Layanan Perizinan</li>
                    <li>Layanan Dokumen Legal</li>
                </ol>
            </div>
        </div>
    </div>

</x-main-layout>
