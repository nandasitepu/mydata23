{{-- Header  --}}
<header class="  mx-5 pb-5">
    <nav class="">
        <div class="grid lg:grid-cols-5">
            {{-- Login /  Forum --}}
            <div class="col self-center sm:order-last bg-gray-200  p-2 rounded-md shadow-md">
                @auth
                    <div class="text-center">
                        <a href="{{ route('dashboard') }}" class="">
                            <x-secondary-button class="bg-white text-xs text-gray-700 dark:text-gray-500">

                                DB

                            </x-secondary-button>
                        </a>
                        <a href="{{ route('profile.edit') }}" class="">
                            <x-secondary-button class="bg-white  text-xs text-gray-700 dark:text-gray-500">

                                Profil

                            </x-secondary-button>
                        </a>

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
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="">
                            <x-secondary-button class="bg-white text-xs text-gray-700 dark:text-gray-500">

                                Masuk

                            </x-secondary-button>
                        </a>
                        <a href="{{ route('login') }}" class="">
                            <x-secondary-button class="bg-white text-xs text-gray-700 dark:text-gray-500">

                                Forum

                            </x-secondary-button>
                        </a>
                    </div>
                @endauth
            </div>

            {{-- Logo --}}
            <div class="col my-5 px-5 ">
                <a href={{ route('welcome') }}>
                    <div class="justify-center flex my-2">
                        <img class="h-20 p-2 bg-red-300" src="{{ asset('/img/logo/MY.png') }}">
                        <div class="text-4xl p-5 px-2"> DATA.ID</div>
                    </div>
                </a>
            </div>

            {{-- Quick Menu --}}
            <div class="md:col-span-3 col hidden lg:block">
                <div class="text-center self-center">
                    <div class="sm:flex sm:justify-center sm:mt-10 ">
                        {{-- Quick Hukum --}}

                        <a href="{{ route('hukum') }}" class="flex rounded-md shadow-sm my-3" role="group">
                            <button
                                class="px-4 py-2 w-2/3 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                type="button">
                                Hukum
                            </button>

                            <button
                                class="px-3 py-2 w-1/3 text-sm font-medium text-white bg-black border border-gray-400">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            </button>
                        </a>
                        {{-- Quick Pendidikan --}}

                        <a href="{{ route('pendidikan') }}" class="flex rounded-md shadow-sm my-3" role="group">
                            <button
                                class="px-4 py-2 w-2/3 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                type="button">
                                Pendidikan
                            </button>

                            <button
                                class="px-3 py-2 w-1/3 text-sm font-medium text-black bg-yellow-100 border border-gray-400">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </button>
                        </a>
                        {{-- Quick Kesehatan --}}

                        <a href="{{ route('kesehatan') }}" class="flex rounded-md shadow-sm my-3" role="group">
                            <button
                                class="px-4 py-2 w-2/3 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                type="button">
                                Kesehatan
                            </button>

                            <button
                                class="px-3 py-2 w-1/3 text-sm font-medium text-white bg-blue-400 border border-gray-400">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            </button>
                        </a>
                        {{-- Quick Publik Data --}}
                        <a href="{{ route('data+') }}" class="flex rounded-md shadow-sm my-3 " role="group">
                            <button
                                class="px-4 py-2 w-2/3 text-sm font-medium text-blue-700 bg-white border border-black  hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                type="button">
                                Data+
                            </button>

                            <button
                                class="px-3 py-2 w-1/3 text-sm font-medium text-black bg-green-300 border border-gray-400">
                                <i class="fa fa-database" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                    {{-- Slogan --}}
                    <div class="font-sm font-mono text-gray-400 text-center bg-gray-50 mx-10 italic">
                        " Mengumpulkan, mengolah, dan menyajikan data indonesia lebih baik ..."

                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>
