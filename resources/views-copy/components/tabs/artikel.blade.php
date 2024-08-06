<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">Terbaru</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                aria-selected="false">
                <i class="fa fa-star" aria-hidden="true"></i> Populer</button>
        </li>
        <li class="me-2" role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                aria-selected="false">Fokus</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">
                <i class="fa fa-newspaper" aria-hidden="true"></i> A
            </button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
        aria-labelledby="profile-tab">
        <section class="text-justify py-2 border-b-2 border-black">
            <div class="font-bold font-mono">
                Kebijakan Tanpa Kebijaksanaan, Sebuah Aturan Korup
            </div>
            <div class="text-end text-xs border-2 border-black p-1 my-2">
                1 April 2024 - NS - Someone
            </div>
            <div class="text-sm font-mono">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis numquam, reciendis minus itaque
                    modi facilis tempora earum atque nostrum aliquid maxime error ratione autem at officia! Soluta sed
                    excepturi vero!</p>


                <div class="flex justify-end">
                    <button class="border-2 border-black p-1 my-2 text-xs">
                        Detail <i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>


            </div>

        </section>


    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
        aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
            The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
        aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
            The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
        aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
            The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>
