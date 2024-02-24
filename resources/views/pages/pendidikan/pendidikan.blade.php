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
        <div class="my-2 py-2 grid sm:grid-cols-3 gap-5 text-center">
            <div class="col">
                Sekolah
            </div>
            <div class="col">
                Pelatihan
            </div>
            <div class="col">
                Jasa Pengajar
            </div>
        </div>
    </div>
</x-main-layout>
