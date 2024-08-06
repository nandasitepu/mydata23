<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="grid md:grid-cols-12">
            {{-- <div class="col-span-3 p-5">

            </div> --}}
            <div class="md:col-span-4 border border-black p-2 m-2">
                <div class="text-xl font-extrabold font-mono text-center">Komentar / Kritik / Saran</div>
                <hr class="border-2 border-black mb-5 ">
                <form class="w-full sm:w-11/12 mx-auto">
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nama*
                        </label>
                        <input type="text" id="nama"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="nama">
                    </div>
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Email*
                        </label>
                        <input type="text" id="email"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="email">
                    </div>
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nomor Telepon (Whastapp)
                        </label>
                        <input type="text" id="status"
                            class="bg-white border  text-gray-500  placeholder-gray-400  text-sm  block w-full p-2 "
                            placeholder="telp">
                    </div>
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Komentar / Kritik / Saran *
                        </label>
                        <textarea id="permintaan" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="tulis disini ..."></textarea>
                    </div>
                </form>
            </div>

            <div class="md:col-span-8">
                <ul class="list-none flex justify-end">
                    <li>
                        <a href ="{{ route('permintaan') }}"><button class="border-2 border-black shadow-md p-1 m-3 text-sm">
                                Permintaan Data</button></a>
                    </li>
                    <li>
                        <a href="{{ route('komentar-kritik-saran') }}"><button
                                class="border-2 border-black shadow-md p-1 m-3 text-sm"> Komentar/Kritik/Saran</button></a>
                    </li>
                </ul>
                <hr>
                <p class="text-lg font-grape font-bold italic py-2 text-center">Tulis Kritik / Komentar / Saran Anda Disini</p>

                <div class="border-2  my-2 p-2">
                    <p class="text-blue-500 text-right my-2 border-b-2 border-red-500">nama</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus repellat incidunt porro nobis perferendis, vitae, minus nisi, sit eligendi aliquam quos maxime velit id corrupti voluptate sequi cumque facilis labore?</p>
                </div>
            </div>

        </div>
    </div>
</x-main-layout>
