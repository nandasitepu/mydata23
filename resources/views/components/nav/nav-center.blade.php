<div class="m-0 items-center">
    {{-- Buttons --}}
    <div class="hidden lg:block ">
        <x-buttons.hover-white href="{{Route('dashboard')}}"> Data + </x-buttons.hover-white>
        <x-buttons.hover-white href="#"> Terbaru </x-buttons.hover-white>
        <x-buttons.hover-white href="#"> Terpopuler </x-buttons.hover-white>
        <x-buttons.hover-white href="#"> Terbaik </x-buttons.hover-white>
    </div>
</div>

<!-- Dropdown menu -->

<div id="dropdownDotsHorizontal"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        <li>
            <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
        </li>
    </ul>
    <div class="py-2">
        <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
            link</a>
    </div>
</div>
