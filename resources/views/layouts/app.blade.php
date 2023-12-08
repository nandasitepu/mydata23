<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

@include('layouts.mydata.head')

<body class="bg-cover bg-no-repeat" style="margin-top: -56px; background-image: url('/img/bg.jpg');">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        @include('layouts.mydata.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
