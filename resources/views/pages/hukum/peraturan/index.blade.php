<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div>
            @include('pages.hukum.header')
        </div>
        {{-- Main Peraturan --}}
        <div class="my-2 py-2 grid sm:grid-cols-12 gap-5 bg-white rounded-3xl">
            <div class="col-span-1 sm:col-span-3">
                {{-- Pencarian --}}
                <div class="m-5 font-bold">Pencarian</div>

                <form class="max-w-sm mx-auto" method="GET">
                    @csrf
                    <div class="mb-5">
                        <input type="text" id="jenis" name="jenis"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="jenis" value="{{ request()->input('jenis') }}">
                    </div>
                    <div class="mb-5">
                        <input type="text" id="nomor" name="nomor"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="nomor" value="{{ request()->input('nomor') }}">
                    </div>
                    <div class="mb-5">
                        <input type="text" id="tentang" name="tentang"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="tentang" value="{{ request()->input('tentang') }}">
                    </div>

                    <div class="mb-5">
                        <input type="text" id="tahun" name="tahun"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="tahun" value="{{ request()->input('tahun') }}">
                    </div>

                    <div class="mb-5">
                        <input type="text" id="status" name="status"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="status" value="{{ request()->input('status') }}">
                    </div>
                    <button type="submit" class="text-black border-2 border-black p-1 w-20 text-sm">Cari</button>
                    <button type="button"
                        class="text-black border-2 border-black p-1 w-20 text-sm reset">Reset</button>
                </form>

                {{-- Statistik Peraturan --}}

            </div>
            <div class="col-span-1 sm:col-span-9">
                <div class="p-5"> {{ $peraturan->links() }}</div>
                <div>
                    @foreach ($peraturan as $p)
                        <div class=" p-5 my-2">
                            <div class="py-3 border-b-2 border-black flex justify-between">
                                <p class="text-lg text-blue-600 font-bold">{{ $p->nomor }}</p>
                                <p class="text-lg text-black font-bold">{{ $p->tahun }}</p>
                            </div>



                            <div class="py-3 border-b border-black border-dashed">
                                {{ $p->tentang }}
                            </div>

                            <div class="py-3 flex justify-between">
                                <div>
                                    <div>

                                        <div class="justify-center  font-mono">
                                            <button href="{{ $p->link_bt }}" class="p-2 m-1 shadow-md text-sm">
                                                PDF <i class="fa fa-file-pdf text-red-300" aria-hidden="true"></i>
                                            </button>

                                            <button href="{{ $p->link_pjl }}" class="p-2 m-1 shadow-md text-sm">
                                                PDF <i class="fa fa-file-pdf text-green-300" aria-hidden="true"></i>
                                            </button>

                                            <button href="{{ $p->link_gdrive }}" class="p-2 m-1 shadow-md text-sm">
                                                <i class="fa fa-star text-yellow-200" aria-hidden="true"></i> PDF
                                                <i class="fa fa-file-pdf text-blue-300" aria-hidden="true"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="px-3 mx-1 bg-green-500 text-white text-sm shadow-md">
                                        {{-- {{ $p->status }} --}}
                                        Status: Berlaku
                                    </button>
                                    <button class="px-3 mx-1 bg-gray-500 text-white text-sm shadow-md">
                                        Jenis : {{ $p->jenis }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-5"> {{ $peraturan->links('pagination::tailwind') }}</div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.tailwindcss.js"></script>
    <script>
        new DataTable('#example');
    </script>
</x-main-layout>
