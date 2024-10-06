<x-main-layout>
    <div class="grid sm:grid-cols-12  bg-gradient-to-r from-green-100 to-blue-100 rounded-r-full">
        <div class="sm:col-span-2 shadow-md">
            <!-- Side Menu -->
            <div>
                <div class="p-3">
                    <label for="input-group-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-search"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Apa ?">
                    </div>
                </div>
                <ul class="max-h-96 overflow-auto px-3 pb-3 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownSearchButton">
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-11" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-11"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Data</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked id="checkbox-item-12" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-12"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Infografis</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-13" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-13"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Tabel</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-14" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-14"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Gambar</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-15" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-15"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Tulisan</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-16" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-16"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Opini</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-17" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-17"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Cerita</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-17" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-17"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Fiksi</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-17" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-17"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Artikel</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-17" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-17"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Iklan</label>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- claude SideMenu --}}
            <div class="bg-white p-5">
                <nav class="mb-6">
                    <ul class="">
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md hover:bg-gray-100 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span class="flex-1">Home</span>
                            </a>
                        </li>
                        <!-- Repeat this structure for other menu items -->
                        <!-- For brevity, I'm only including a few items here -->
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md hover:bg-gray-100 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                                <span class="flex-1">Reading list</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md hover:bg-gray-100 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <span class="flex-1">Podcasts</span>
                            </a>
                        </li>
                        <!-- Add more menu items here -->
                    </ul>
                </nav>

                <div class="border-t pt-4">
                    <h3 class="text-gray-600 text-sm font-semibold mb-2">Others</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md hover:bg-gray-100 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                                <span class="flex-1">Privacy policy</span>
                            </a>
                        </li>
                        <!-- Add more "Others" items here -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="sm:col-span-9">
            {{-- <div class="flex flex-col sm:flex-row gap-2">
                <button class="flex items-center justify-center px-4 py-2 bg-white hover:bg-gray-50 text-gray-700 text-sm font-medium rounded-full border border-gray-300 transition-colors duration-300 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Share
                </button>

                <button class="flex items-center justify-center px-4 py-2 bg-white hover:bg-gray-50 text-gray-700 text-sm font-medium rounded-full border border-gray-300 transition-colors duration-300 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Tweet
                </button>

                <button class="flex items-center justify-center px-4 py-2 bg-white hover:bg-gray-50 text-gray-700 text-sm font-medium rounded-full border border-gray-300 transition-colors duration-300 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Copy link
                </button>
            </div> --}}
            @include('posting.comp.list')
            <div class="m-10">
                <svg
                class="container"
                x="0px"
                y="0px"
                viewBox="0 0 50 31.25"
                height="auto"
                width="auto"
                preserveAspectRatio='xMidYMid meet'
              >
                <path
                  class="track"
                  stroke-width="4"
                  fill="none"
                  pathlength="100"
                  d="M0.625 21.5 h10.25 l3.75 -5.875 l7.375 15 l9.75 -30 l7.375 20.875 v0 h10.25"
                />
                <path
                  class="car"
                  stroke-width="4"
                  fill="none"
                  pathlength="100"
                  d="M0.625 21.5 h10.25 l3.75 -5.875 l7.375 15 l9.75 -30 l7.375 20.875 v0 h10.25"
                />
              </svg>

              <style>
                .container {
                  --uib-size: 45px;
                  --uib-color: black;
                  --uib-speed: 1.75s;
                  --uib-bg-opacity: .1;
                  height: 31.25px;
                  width: 50px;
                  transform-origin: center;
                  overflow: visible;
                }

                .car {
                  stroke: var(--uib-color);
                  stroke-dasharray: 100;
                  stroke-dashoffset: 0;
                  stroke-linecap: round;
                  stroke-linejoin: round;
                  animation:
                    travel var(--uib-speed) ease-in-out infinite,
                    fade var(--uib-speed) ease-out infinite;
                  will-change: stroke-dasharray, stroke-dashoffset;
                  transition: stroke 0.5s ease;
                }

                .track {
                  stroke-linecap: round;
                  stroke-linejoin: round;
                  stroke: var(--uib-color);
                  opacity: var(--uib-bg-opacity);
                }

                @keyframes travel {
                  0% {
                    stroke-dashoffset: 100;
                  }

                  75% {
                    stroke-dashoffset: 0;
                  }
                }

                @keyframes fade {
                  0% {
                    opacity: 0;
                  }

                  20%,
                  55% {
                    opacity: 1;
                  }

                  100% {
                    opacity: 0;
                  }
                }
              </style>


            </div>
        </div>
        <div class="sm:col-span-3 ">

        </div>

    </div>

</x-main-layout>
