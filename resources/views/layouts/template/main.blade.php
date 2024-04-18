<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
@include('layouts.main.head')



    <body class="bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('/img/bg.jpg')";>
        {{-- The Main --}}
        <div class="bg-white md:mx-20 md:my-5 border-2 border-black">
            {{-- Header  --}}
            @include('layouts.mydata.header')

            {{-- Main --}}
            <div>
                {{ $slot }}
            </div>

            {{-- Footer --}}
            @include('layouts.mydata.footer')
        </div>


    </body>

</html>
