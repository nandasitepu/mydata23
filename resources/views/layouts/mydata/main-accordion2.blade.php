  <!-- Accordion component -->
  <div class=" mx-10">
    <!-- Accordion item -->
    <div x-data="{ expanded: true }" class="py-2">
        <h2>
            <button
                id="faqs-title-01"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-01"
            >
                <span class="font-mono">Dataku</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-01"
            role="region"
            aria-labelledby="faqs-title-01"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    @include('layouts.mydata.artikel2')
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-02"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-02"
            >
                <span>Tulisan / Artikel / Opini / Cerita / Fiksi</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-02"
            role="region"
            aria-labelledby="faqs-title-02"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    @include('components.menu.list-article')
                </p>
            </div>
        </div>
    </div>
    {{-- <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-03"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-03"
            >
                <span>You really don't charge per user? Why not?</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-03"
            role="region"
            aria-labelledby="faqs-title-03"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    If you go over your organisations or user limit, a member of the team will reach out about bespoke pricing. In the meantime, our collaborative features won't appear in accounts or users that are over the 100-account or 1,000-user limit.
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-04"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-04"
            >
                <span>What happens when I go over my monthly active limit?</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-04"
            role="region"
            aria-labelledby="faqs-title-04"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    If you go over your organisations or user limit, a member of the team will reach out about bespoke pricing. In the meantime, our collaborative features won't appear in accounts or users that are over the 100-account or 1,000-user limit.
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-05"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-05"
            >
                <span>Can your service help me understand how to work with my product?</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-05"
            role="region"
            aria-labelledby="faqs-title-05"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    If you go over your organisations or user limit, a member of the team will reach out about bespoke pricing. In the meantime, our collaborative features won't appear in accounts or users that are over the 100-account or 1,000-user limit.
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-06"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-06"
            >
                <span>Which third-party application do you integrate with?</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-06"
            role="region"
            aria-labelledby="faqs-title-06"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    If you go over your organisations or user limit, a member of the team will reach out about bespoke pricing. In the meantime, our collaborative features won't appear in accounts or users that are over the 100-account or 1,000-user limit.
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion item -->
    <div x-data="{ expanded: false }" class="py-2">
        <h2>
            <button
                id="faqs-title-07"
                type="button"
                class="flex items-center justify-between w-full text-left font-semibold py-2"
                @click="expanded = !expanded"
                :aria-expanded="expanded"
                aria-controls="faqs-text-07"
            >
                <span>I have another question!</span>
                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                </svg>
            </button>
        </h2>
        <div
            id="faqs-text-07"
            role="region"
            aria-labelledby="faqs-title-07"
            class="grid text-sm text-slate-600 overflow-hidden transition-all duration-300 ease-in-out"
            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'"
            >
            <div class="overflow-hidden">
                <p class="pb-3">
                    If you go over your organisations or user limit, a member of the team will reach out about bespoke pricing. In the meantime, our collaborative features won't appear in accounts or users that are over the 100-account or 1,000-user limit.
                </p>
            </div>
        </div>
    </div> --}}
</div>
<!-- End: Accordion component -->
