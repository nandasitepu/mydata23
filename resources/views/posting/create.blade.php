<x-main-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-5xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Posting</h2>
            <form action="{{ route('posting.store') }}" method="POST">
                @csrf

                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        <label for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="judul" id="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="" placeholder="Judul Posting">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main
                            Image URL</label>
                        <img src="" alt="" srcset="">
                        <input type="url" name="gambar" id="image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="">
                    </div>

                    <div class="w-full">
                        <label for="Penulis"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                        <input type="text" name="penulis" id="Penulis"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="" placeholder="Nama Penulis">
                    </div>
                    <div class="w-full">
                        <label for="created_at"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="created_at" id="created_at"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="" placeholder="">
                    </div>
                    <div>
                        <label for="Kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="Kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            name="kategori">
                            <option value="" name="kategori">Pilih Kategori</option>
                            <option value="Hukum">Hukum</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Bisnis">Bisnis</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2 prose max-w-none">
                        <label for="pembuka"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembuka</label>
                        <textarea id="pembuka" rows="2"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" name="pembuka">
                       </textarea>
                    </div>
                    <div class="sm:col-span-2 prose max-w-none">
                        <label for="text-area"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi</label>
                        <textarea id="text-area" rows="12"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" name="isi">
                       </textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="bg-blue-700 text-white hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Create Posting
                    </button>

                </div>
            </form>
        </div>
    </section>
    {{-- Extra --}}
    @slot('styles')
        <link rel="stylesheet" href="{{ asset('ckeditor5/ckeditor5.css') }}">
        <link rel="stylesheet" href="{{ asset('ckeditor5/ck-style.css') }}">
    @endslot
    @slot('scripts')
        <script type="module" src="{{ asset('ckeditor5/ckeditor5.js') }}"></script>
        <script type="module" src="{{ asset('ckeditor5/ck-config.js') }}"></script>
    @endslot
</x-main-layout>
