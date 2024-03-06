<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-yellow-200 shadow-md shadow-gray-900 py-2">Pendidikan <i class="fa fa-book text-black" aria-hidden="true"></i></div>
            <div class="flex justify-end p-2">
                <a class="text-black font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Sekolah <i class="fa fa-building text-gray-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-yellow-700 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Pelatihan <i class="fa fa-check text-red-500" aria-hidden="true"></i></div>
                </a>
                <a class="text-green-500 font-semibold font-mono" href="#">
                    <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Jasa Pengajar <i class="fa fa-users text-black" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid md:grid-cols-6 gap-5 ">
            <div class="col-span-1 md:col-span-2 border border-black p-5"">
                <p class="text-2xl font-semibold"> Sekolah<i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">

                    <li>Pendidikan Anak Usia Dini
                        <ul class="list-disc ml-5">
                            <li>Kelompok Belajar</li>
                            <li>Taman Kanak-Kanak</li>
                        </ul>
                    </li>
                    <li>Sekolah Dasar</li>
                    <li>Sekolah Menengah Pertama</li>
                    <li>Sekolah Menengah Atas</li>
                    <li>Pendidikan Tinggi</li>
                </ol>
            </div>
            <div class="col-span-1 md:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Pelatihan<i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Full Stack Developer</li>
                    <li>Make Up Artist</li>
                    <li>Fashion</li>
                    <li>Otomotif</li>
                    <li>Teknisi</li>
                    <li>Bahasa Asing</li>
                </ol>
            </div>
            <div class="col-span-1 md:col-span-2 border border-black p-5"">
                <p class="text-2xl font-semibold"> Jasa Pendidikan<i class="fa fa-location-arrow text-gray-500 float-right" aria-hidden="true"></i></p>
                <hr>
                <ol class="list-disc ml-5">
                    <li>Les Privat</li>
                    <li>Bimbingan Sekolah Dasar</li>
                    <li>Bimbingan Sekolah Menengah Pertama</li>
                    <li>Bimbingan Sekolah Menengah Atas</li>
                    <li>Bimbingan Pendidikan Tinggi / Universitas / Sekolah Kedinasan</li>
                </ol>
            </div>
        </div>
    </div>
</x-main-layout>
