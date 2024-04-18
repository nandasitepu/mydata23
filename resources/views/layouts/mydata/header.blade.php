{{-- Header  --}}
<header class="bg-gray-50 shadow-md rounded-xl">
    <div class="grid sm:grid-cols-12">
        <div class="col sm:col-span-3 px-5">
            {{-- Logo --}}
            <a href={{ route('welcome') }}>
                <div class="flex justify-center items-center sm:mx-5 mt-2">
                    <img class="h-12 sm:h-20 border-4 border-red-500 rounded-xl" src="{{ asset('/img/logo/MY.png') }}">
                    <div class="text-xl sm:text-5xl sm:my-5 mx-2 font-bebas">DATA.ID</div>
                    <img class="h-4" src="{{ asset('/img/data-plus/loveid.png') }}">
                </div>
            </a>
        </div>
        <div class="col text-center sm:col-span-6 sm:flex sm:justify-around px-5 sm:pt-8">
            <div class="text-sm sm:text-md font-mono italic font-bold py-2">
                <p>"Data Indonesia dari kita untuk rakyat..."</p>
            </div>
            {{-- Search --}}
            <div>
                <form class="flex items-center max-w-sm mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa fa-file text-red-200" aria-hidden="true"></i>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari Data Apa ... ?" required />
                    </div>
                    <button type="submit"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-red-200 rounded-lg  border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                <form>
            </div>
        </div>

        <div class="col sm:col-span-3 bg-white">
            <div class="col sm:float-right sm:me-10 sm:order-last">
                @auth
                    <div class="flex justify-around">

                        {{-- Separator --}}
                        <!-- Notifications Button-->
                        <button type="button" data-dropdown-toggle="notification-dropdown-desktop"
                            class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                            <span class="sr-only">View notifications</span>
                            <!-- Bell icon -->
                            <i class="fa fa-bell fa-lg text-red-200" aria-hidden="true"></i>
                        </button>
                        <!-- Notification Dropdown menu -->
                        <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl"
                            id="notification-dropdown-desktop">
                            <div
                                class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300">
                                Notifications
                            </div>
                            <div>
                                <a href="#"
                                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="w-11 h-11 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                            alt="Bonnie Green avatar" />
                                        <div
                                            class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 dark:border-gray-700">
                                            <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                                </path>
                                                <path
                                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="pl-3 w-full">
                                        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                            New message from
                                            <span class="font-semibold text-gray-900 dark:text-white">Bonnie
                                                Green</span>:
                                            "Hey,
                                            what's up? All set for the presentation?"
                                        </div>
                                        <div class="text-xs font-medium text-primary-600 dark:text-primary-500">
                                            a few moments ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="w-11 h-11 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                            alt="Jese Leos avatar" />
                                        <div
                                            class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-700">
                                            <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="pl-3 w-full">
                                        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                            <span class="font-semibold text-gray-900 dark:text-white">Jese leos</span>
                                            and
                                            <span class="font-medium text-gray-900 dark:text-white">5 others</span>
                                            started following you.
                                        </div>
                                        <div class="text-xs font-medium text-primary-600 dark:text-primary-500">
                                            10 minutes ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="w-11 h-11 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                            alt="Joseph McFall avatar" />
                                        <div
                                            class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-700">
                                            <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="pl-3 w-full">
                                        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                            <span class="font-semibold text-gray-900 dark:text-white">Joseph
                                                Mcfall</span>
                                            and
                                            <span class="font-medium text-gray-900 dark:text-white">141 others</span>
                                            love your story. See it and view more stories.
                                        </div>
                                        <div class="text-xs font-medium text-primary-600 dark:text-primary-500">
                                            44 minutes ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="w-11 h-11 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                            alt="Roberta Casas image" />
                                        <div
                                            class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-700">
                                            <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="pl-3 w-full">
                                        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                            <span class="font-semibold text-gray-900 dark:text-white">Leslie
                                                Livingston</span>
                                            mentioned you in a comment:
                                            <span
                                                class="font-medium text-primary-600 dark:text-primary-500">@bonnie.green</span>
                                            what do you say?
                                        </div>
                                        <div class="text-xs font-medium text-primary-600 dark:text-primary-500">
                                            1 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <div class="flex-shrink-0">
                                        <img class="w-11 h-11 rounded-full"
                                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                                            alt="Robert image" />
                                        <div
                                            class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-700">
                                            <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="pl-3 w-full">
                                        <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
                                            <span class="font-semibold text-gray-900 dark:text-white">Robert
                                                Brown</span>
                                            posted a new video: Glassmorphism - learn how to implement
                                            the new design trend.
                                        </div>
                                        <div class="text-xs font-medium text-primary-600 dark:text-primary-500">
                                            3 hours ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-600 dark:text-white dark:hover:underline">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>
                        <a href="{{ route('dashboard') }}" class="font-mono font-bold shadow-md"><button type="button"
                                class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                                Dashboard
                            </button></a>
                        {{-- User's Button --}}
                        <button type="button"
                            class="flex mx-3 text-sm  md:mr-0 focus:ring-4 rounded-full focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-desktop">
                            <span class="sr-only">Open user menu</span>
                            <img class="rounded-lg w-8" src="{{ asset('/img/data-plus/avatar.png') }}" alt="mydata_user">
                        </button>
                        <!-- User's Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white  divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-desktop">
                            <div class="py-3 px-4">
                                <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil
                                    Sims</span>
                                <span class="block text-sm text-gray-900 truncate dark:text-white">name@flowbite.com</span>
                            </div>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                        profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                        settings</a>
                                </li>
                            </ul>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <a href="#"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="mr-2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        My likes</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="mr-2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                            </path>
                                        </svg>
                                        Collections</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="flex items-center">
                                            <svg aria-hidden="true"
                                                class="mr-2 w-5 h-5 text-primary-600 dark:text-primary-500"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Pro version
                                        </span>
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="flex justify-around font-mono">
                        <div class="inline-flex items-center p-2 mt-2">
                            <a href="{{ route('login') }}" class="mx-2">
                                <div class="items-center border-2 p-1 shadow-xl text-sm"><img class="w-8 h-8 "
                                        src="{{ asset('/img/data-plus/log-in.png') }}"></div>
                            </a>

                            <a href="{{ route('redirect') }}" class="mx-2">
                                <div class="items-center border-2 p-1 shadow-xl text-sm">
                                    <img class="w-8 h-8 p-1" src="{{ asset('/img/data-plus/google-symbol.png') }}">
                                </div>
                            </a>
                            <a href="{{ route('redirect') }}" class="mx-2">
                                <div class="items-center border-2 p-1 shadow-xl text-sm">
                                    <img class="w-8 h-8 p-1" src="{{ asset('/img/data-plus/facebook.png') }}">
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-xs text-center border-t-2 font-mono font-bold"> Masuk / Daftar / Lihat-Lihat </p>
                @endauth
            </div>
        </div>
    </div>
</header>

{{-- <script>
    var lastScrollTop;
    navbar = document.getElementById('logo-bar');
    p = document.getElementById('masuk');
    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.top = '-100px';
            p.style.display = "none";
        } else {
            navbar.style.top = '0';
            p.style.display = "inline";
        }
        lastScrollTop = scrollTop;
    });
</script> --}}
