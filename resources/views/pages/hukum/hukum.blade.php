<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        {{-- Header --}}
        <div class="text-center border-b-2 border-black border-dashed mb-5">
            <div class="text-3xl bg-gray-700 shadow-md shadow-gray-200 text-white py-2 rounded-md">
                Hukum <i
                    class="fa fa-balance-scale text-white" aria-hidden="true"></i></div>
            <div class="flex justify-end p-2">
                <a class="text-black font-semibold font-mono" href="{{ route('peraturan.index') }}">
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
            <div class="col-span-6">

                <figure class="max-w-screen-md mx-auto text-center">
                    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                    <blockquote>
                        <p> Pasal 27 ayat (1) Undang – Undang Dasar Negara Republik Indonesia Tahun 1945 berbunyi : “segala
                            warga negara bersamaan kedudukannya di dalam hukum dan pemerintahan dan wajib menjunjung hukum dan
                            pemerintahan itu dengan tidak ada kecualinya.</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                            <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                        </div>
                    </figcaption>
                </figure>
            </div>



            <div class="col-span-1 sm:col-span-2 border border-black p-5">
                <p class="text-2xl font-semibold"> Peraturan <i class="fa fa-location-arrow text-gray-500 float-right"
                        aria-hidden="true"></i></p>
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
                <p class="text-2xl font-semibold"> Penegak Hukum <i class="fa fa-users text-gray-500 float-right"
                        aria-hidden="true"></i></p>
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
                <p class="text-2xl font-semibold">Jasa Legal <i class="fa fa-address-book text-gray-500 float-right"
                        aria-hidden="true"></i></i></p>
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
