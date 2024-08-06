<!-- Accordion Beranda -->
<div x-data="{ expanded: true }" class="py-2">
    <h2>
        <button id="beranda" type="button"
            class="flex justify-end"
            @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="beranda">

            <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                <rect y="7" width="16" height="2" rx="1"
                    class="transform origin-center transition duration-200 ease-out"
                    :class="{ '!rotate-180': expanded }" />
                <rect y="7" width="16" height="2" rx="1"
                    class="transform origin-center rotate-90 transition duration-200 ease-out"
                    :class="{ '!rotate-180': expanded }" />
            </svg>
        </button>
    </h2>
    <div id="beranda" role="region" aria-labelledby="faqs-title-01"
        class="grid text-sm text-slate-600 overflow-hidden transition-all duration-700 ease-linear"
        :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
        <div class="overflow-hidden">
            <p class="pb-3">
                @include('layouts.mydata.top-menu')
            </p>
        </div>
    </div>
</div>
<!-- End: Accordion component -->
