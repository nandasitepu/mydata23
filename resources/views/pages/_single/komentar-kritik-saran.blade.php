<x-main-layout>
    {{-- Main Hukum --}}
    <div class="mx-5">
        <div class="grid grid-cols-12">
            <div class="col-span-3">
                <ul>
                    <li>Permintaan Data</li>
                    <li>Komentar/Kritik/Saran</li>
                </ul>
            </div>
            <div class="col-span-9">
                <div class="text-xl font-extrabold font-mono text-center">Form Permintaan Data</div>
                <hr class="border-2 border-black mb-5 ">
                <form class="w-full sm:w-11/12 mx-auto">
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Nama Lengkap*
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
                            placeholder="status">
                    </div>
                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Permintaan*
                        </label>
                        <textarea id="permintaan" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="permintaan..."></textarea>
                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Tujuan*
                        </label>
                        <textarea id="tujuan" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="tujuan..."></textarea>

                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="underline_select" >Opsi Kontak</label>
                        <select id="underline_select"
                            class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200">
                            <option selected value="email">Email</option>
                            <option value="wa">WhatsApp</option>
                            <option value="telp">Telepon</option>
                            <option value="sms">SMS</option>
                        </select>
                    </div>



                </form>
            </div>

        </div>
    </div>
</x-main-layout>
