<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        @include('pages.hukum.header')
    </div>
    {{-- Opening --}}
    <div class="col bg-white rounded-xl mx-5 p-5">
        <figure class="max-w-screen-md mx-auto text-center">
            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                <path
                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
            </svg>
            <blockquote>
                <p> Pasal 27 ayat (1) Undang – Undang Dasar Negara Republik Indonesia Tahun 1945 berbunyi :
                    “segala
                    warga negara bersamaan kedudukannya di dalam hukum dan pemerintahan dan wajib menjunjung
                    hukum dan
                    pemerintahan itu dengan tidak ada kecualinya.</p>
            </blockquote>

        </figure>
    </div>
    {{-- Cards --}}
    <div class="my-2 py-2 grid grid-cols-1 sm:grid-cols-3 gap-2">
        {{-- Hierarki --}}
        <div class="col p-5 mx-5 bg-white rounded-xl">
            <div class="font-bold text-center mb-5 text-xl font-mono ">
                <p>Hierarki Peraturan</p>
                <p> UU Nomor 12 Tahun 2011 (Pasal 7 & 8)</p>
            </div>

            <ol class="list-decimal ml-5 font-medium prose">
                <li>
                    <x-buttons.hover-black href="#">
                        Undang-Undang Dasar 1945
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        TAP MPR
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Undang-Undang / Perpu
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Peraturan Pemerintah
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Peraturan Presiden
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Peraturan Daerah Provinsi
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Peraturan Daerah Kabupaten/Kota
                    </x-buttons.hover-black>
                </li>
                <li>
                    <x-buttons.hover-black href="#">
                        Peraturan Menteri (* pasal 8)
                    </x-buttons.hover-black>
                </li>
            </ol>

        </div>
        {{-- Lembaga --}}
        <div class="col p-5 mx-5 bg-blue-100 rounded-xl">
            <p class="text-2xl font-semibold"> Lembaga </p>
            <hr>
            <ol class="list-disc ml-5">
                <li>
               Kehakiman
                    <ol class="list-disc list-inside">
                        <li>Pengadilan Negeri</li>
                        <li>Pengadilan Tinggi</li>
                        <li>Pengadilan Agama</li>
                        <li>Pengadilan Militer</li>
                        <li>Pengadilan Tata Usaha Negara</li>
                        <li>Pengadilan Tindak Pidana Korupsi</li>
                        <li>Mahkamah Agung</li>
                        <li>Mahkamah Konstitusi</li>
                    </ol>
                </li>
                <hr>
                <li>Kejaksaan
                    <ol class="list-disc list-inside">
                        <li>Kejaksaan Negeri</li>
                        <li>Kejaksaan Tinggi</li>
                        <li>Kejaksaan Agung</li>
                    </ol>
                </li>
                <hr>
                <li>
                    Kepolisian
                    <ol class="list-disc list-inside">
                        <li>Bhayangkara Pembina Keamanan dan Ketertiban Masyarakat</li>
                        <li>Kepolisian Sektor</li>
                        <li>Kepolisian Resor</li>
                        <li>Kepolisian Daerah</li>
                        <li>Kepolisian Republik Indonesia</li>
                    </ol>
                </li>

            </ol>
        </div>
        {{-- Praktisi --}}
        <div class="col p-5 mx-5 bg-yellow-100 rounded-xl">
            <p class="text-2xl font-semibold">Praktisi <i class="fa fa-address-book text-gray-500 float-right"
                    aria-hidden="true"></i></i></p>
            <hr>
            <ol class="list-disc ml-5">
                <li>Advokat</li>
                <li>Notaris</li>
                <li>Pejabat Pembuat Akta Tanah</li>
                <li>Layanan Konsultasi Hukum</li>
                <li>Layanan Perizinan</li>
                <li>Layanan Dokumen Legal</li>
            </ol>
        </div>
    </div>
</x-main-layout>
