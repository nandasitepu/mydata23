<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="text-center border-b-2 border-black border-dashed mb-5">

            <div class="text-3xl bg-gray-200 py-2">Hukum <i class="fa fa-balance-scale text-black" aria-hidden="true"></i>
            </div>
            <div class="sm:flex justify-between p-2">
                <div class="font-mono text-2xl font-bold mt-2">
                    Peraturan
                </div>
                <div class="flex justify-center">
                    <a class="text-black font-semibold font-mono" href="#">
                        <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Peraturan <i
                                class="fa fa-book text-gray-500" aria-hidden="true"></i></div>
                    </a>
                    <a class="text-yellow-700 font-semibold font-mono" href="#">
                        <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Penegak Hukum <i
                                class="fa fa-crosshairs text-red-500" aria-hidden="true"></i></div>
                    </a>
                    <a class="text-green-500 font-semibold font-mono" href="#">
                        <div class="shadow-lg border-2 border-black p-2 m-1 text-sm">Jasa Hukum <i
                                class="fa fa-user-secret text-black" aria-hidden="true"></i></div>
                    </a>
                </div>
            </div>
        </div>
        {{-- Separator --}}
        <div class="my-2 py-2 grid sm:grid-cols-12 gap-5 ">

            <div class="col-span-1 sm:col-span-3">
                <div class="mb-2 font-bold">Pencarian</div>
                {{-- Pencarian --}}
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
                {{-- Ads --}}
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5839875324586738"
                    crossorigin="anonymous"></script>
                <!-- MYDATA.ID - ADS 01 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5839875324586738" data-adtest="on"
                    data-ad-slot="9885579323" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                {{-- Statistik Peraturan --}}

            </div>
            <div class="col-span-1 sm:col-span-9">
                {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5839875324586738"
                    crossorigin="anonymous"></script>
                <!-- MYDATA.ID - ADS 01 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5839875324586738" data-adtest="on"
                    data-ad-slot="9885579323" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script> --}}

                {{ $peraturan->links() }}

                @foreach ($peraturan as $p)
                    <div class="border border-black p-5 my-2">
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
                {{ $peraturan->links('pagination::tailwind') }}

                @include('pages.hukum.peraturan.table-test')
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





