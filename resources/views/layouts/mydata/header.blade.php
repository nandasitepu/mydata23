{{-- Header  --}}
<header class="mx-5 border-b-2 border-black pb-5">
    <nav class="">
        <div class="grid lg:grid-cols-5">
            {{-- Login /  Forum --}}
            <div class="col pt-5 sm:order-last">
                @auth
                    <div class="text-right">
                        <x-secondary-button class="bg-white text-sm">
                            <a href="{{ route('dashboard') }}" class="text-xs text-gray-700 dark:text-gray-500">
                                Dashboard
                            </a>
                        </x-secondary-button>
                        <x-secondary-button class="bg-white text-sm">
                            <a href="{{ route('profile.edit') }}" class="text-xs text-gray-700 dark:text-gray-500">
                                Profil
                            </a>
                        </x-secondary-button>


                        <form class="inline" method="POST" action="{{ route('logout') }}">
                            <x-primary-button class="text-sm text-white">
                                <div class="text-xs text-white">
                                    @csrf
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </div>
                            </x-primary-button>
                        </form>


                    </div>
                @else
                    <div class="text-right">
                        <x-secondary-button class="bg-white text-sm">
                            <a href="{{ route('login') }}" class="text-xs text-gray-700 dark:text-gray-500">
                                Masuk
                            </a>
                        </x-secondary-button>
                        <x-secondary-button class="bg-white text-sm">
                            <a href="{{ route('login') }}" class="text-xs text-gray-700 dark:text-gray-500">
                                Forum
                            </a>
                        </x-secondary-button>
                    </div>
                @endauth
            </div>

            {{-- Logo --}}
            <div class="col my-5 px-5 bg-gray-100 rounded-xl">
                <a href={{ route('welcome') }}>
                    <div class="justify-center flex mt-2">
                        <img class="h-20 p-2 bg-red-300" src="{{ asset('/img/logo/MY.png') }}">
                        <div class="text-4xl py-5">DATA.ID</div>
                    </div>
                </a>
            </div>

            {{-- Quick Menu --}}
            <div class="md:col-span-3 col">
                <div class="text-center sm:m-5">
                    {{-- Quick Hukum --}}

                    <a href="{{ route('hukum') }}" class="sm:inline-flex rounded-md shadow-sm mt-5" role="group">
                        <button
                            class="px-4 py-2 w-10/12 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                            type="button">
                            Hukum
                        </button>

                        <button class="px-3 py-2 text-sm font-medium text-white bg-black border border-gray-400">
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        </button>
                    </a>
                    {{-- Quick Pendidikan --}}

                    <a href="{{ route('pendidikan') }}" class="sm:inline-flex rounded-md shadow-sm mt-5" role="group">
                        <button
                            class="px-4 py-2 w-10/12 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                            type="button">
                            Pendidikan
                        </button>

                        <button class="px-3 py-2 text-sm font-medium text-black bg-yellow-200 border border-gray-400">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </button>
                    </a>
                    {{-- Quick Kesehatan --}}

                    <a href="{{ route('kesehatan') }}" class="sm:inline-flex rounded-md shadow-sm mt-5" role="group">
                        <button
                            class="px-4 py-2 w-10/12 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                            type="button">
                            Kesehatan
                        </button>

                        <button class="px-3 py-2 text-sm font-medium text-white bg-blue-400 border border-gray-400">
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        </button>
                    </a>
                    {{-- Quick Publik Data --}}
                    <a href="{{ route('data+') }}" class="sm:inline-flex rounded-md shadow-sm mt-5" role="group">
                        <button
                            class="px-4 py-2 w-10/12 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                            type="button">
                            Data +
                        </button>

                        <button href="#"
                            class="px-3 py-2 text-sm font-medium text-black bg-green-400 border border-gray-400">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </button>
                    </a>
                    <div class="font-sm font-mono text-gray-400 text-center mt-5 bg-gray-100">
                        \\ mengumpulkan, mengolah, dan menyajikan data indonesia <span class="line-through"> jadi lebih
                            bermakna</span> //
                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>
