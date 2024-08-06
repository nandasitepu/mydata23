  <!-- Accordion component -->
  <div class="my-2 bg-gradient-to-r from-blue-500 to-red-500 rounded-full flex">
      <!-- Accordion item -->
      <div x-data="{ expanded: true }" class="py-1">

          <button id="postingan" type="button"
              class="flex justify-center items-center text-center font-semibold py-2 px-5" @click="expanded = !expanded"
              :aria-expanded="expanded" aria-controls="faqs-text-02">
              <div>
                  {{-- <span class="border-2 px-5 border-red-500 bg-white shadow-md text-xl">Postingan</span>
                  - --}}
                  <span class="border px-5 border-black bg-red-100 shadow-md">Data</span>
                  -
                  <span class="border px-5 border-black bg-yellow-100 shadow-md">Infografis</span>
                  -
                  <span class="border px-5 border-black bg-green-100 shadow-md">Tabel</span>
                  -
                  <span class="border px-5 border-black bg-blue-100 shadow-md">Gambar </span>
                  -
                  <span class="border px-5 border-black bg-purple-100 shadow-md">Tulisan</span>
                  -
                  <span class="border px-5 border-black bg-orange-100 shadow-md">Opini</span>
                  -
                  <span class="border px-5 border-black bg-white shadow-md">Cerita</span>
                  -
                  <span class="border px-5 border-black bg-gray-100 shadow-md">Fiksi</span>
                  -
                  <span class="border px-5 border-black bg-black text-white shadow-md">Artikel</span>
              </div>


              <svg class="shrink-0 ml-8 animate-spin" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                  <rect y="7" width="16" height="2" rx="1"
                      class="transform origin-center transition duration-200 ease-out"
                      :class="{ '!rotate-180': expanded }" />
                  <rect y="7" width="16" height="2" rx="1"
                      class="transform origin-center rotate-90 transition duration-200 ease-out"
                      :class="{ '!rotate-180': expanded }" />
              </svg>
          </button>

          <div id="faqs-text-02" role="region" aria-labelledby="postingan"
              class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
              :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
              <div class="overflow-hidden">
                  <p class="mx-5">
                      @include('posting.comp.list')
                  </p>
              </div>
          </div>
      </div>
      <div class="mt-3"> <a href="{{ route('posting.index') }}"
              class="border-2 px-5 border-black bg-white shadow-md font-bold text-xl ">Blog</a>
      </div>
  </div>
  <!-- End: Accordion component -->
