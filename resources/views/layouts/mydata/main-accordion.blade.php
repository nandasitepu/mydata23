<div id="accordion-flush"  data-accordion="open" data-active-classes="bg-yellow-200" data-inactive-classes="bg-gray-200">
    <button type="button" id="accordion-welcome-button" class="flex justify-between w-15 mx-10 px-5 py-1 border-2 border-black text-sm"
        data-accordion-target="#accordion-welcome" aria-expanded="true" aria-controls="accordion-welcome">
        {{-- <span class="font-mono font-bold"></span> --}}
        <svg data-accordion-icon class="w-3 h-2 m-1 rotate-360 shrink" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
        </svg>

    </button>

    <div>
        <div id="accordion-welcome" class="hidden" aria-labelledby="accordion-welcome">
            @include('layouts.mydata.top-menu')
        </div>
    </div>

</div>
