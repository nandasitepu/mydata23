<x-main-layout>
    <div class="grid sm:grid-cols-12 gap-2 text-center m-10">
        <div class="sm:col-span-1 border-2  border-black">
            1
        </div>
        <div class="sm:col-span-6 border-2  border-black">
               <x-tabs.artikel></x-tabs.artikel>
        </div>
        <div class="sm:col-span-5 border-2  border-black">
            @include('layouts.mydata.events')
        </div>
    </div>



</x-main-layout>
