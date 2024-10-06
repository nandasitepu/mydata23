   {{-- Header --}}
   <div class="flex justify-center text-center text-sm" id="buttons-hukum">
       <div class="col md:col-span-3">
           <x-buttons.hover-black href="{{ route('hukum') }}">
               <svg class="w-6 h-6 text-gray-800 bg-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
               </svg>
               <span class="m-1">Hukum</span>
           </x-buttons.hover-black>
       </div>
       <div class="col md:col-span-3">
           <x-buttons.hover-black href="{{ route('peraturan.index') }} ">
               <svg class="w-6 h-6 text-gray-800 bg-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
               </svg>
               <span class="m-1">Peraturan</span>
           </x-buttons.hover-black>
       </div>
       <div class="col md:col-span-3">
           <x-buttons.hover-black href="{{ route('lembaga-hukum') }}">

               <svg class="w-6 h-6 text-gray-800 bg-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
               </svg>

               <span class="m-1">Lembaga</span>
           </x-buttons.hover-black>
       </div>
       <div class="col md:col-span-3">
           <x-buttons.hover-black href="{{ route('praktisi-hukum') }}">
               <svg class="w-6 h-6 text-gray-800 bg-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                       d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
               </svg>

               <span class="m-1">Praktisi</span>
           </x-buttons.hover-black>
       </div>
       @slot('scripts')
           <script>
               var btnContainer = document.getElementById("buttons-hukum");

               // Get all buttons with class="btn" inside the container
               var btns = btnContainer.getElementsByClassName("btn");

               // Loop through the buttons and add the active class to the current/clicked button
               for (var i = 0; i < btns.length; i++) {
                   btns[i].addEventListener("click", function() {
                       var current = document.getElementsByClassName("active");
                       current[0].className = current[0].className.replace(" active", "");
                       this.className += " active";
                   });
               }
           </script>
       @endslot
       @slot('styles')
           <style>
               /* Style the active class (and buttons on mouse-over) */
               .btn .active,
               {
               background-color: red;
               color: white;
               }
           </style>
       @endslot
   </div>
