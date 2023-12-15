@if (session()->has('status'))
    <div
        class="pointer-events-none fixed inset-x-0 bottom-0 z-50 flex items-end justify-center px-4 py-6 sm:items-start sm:justify-end sm:p-6">
        <div x-cloak x-data="{ show: false }" x-init="() => {
            setTimeout(() => show = true, 500);
            setTimeout(() => show = false, 6000);
        }" x-show="show"
            x-description="Notification panel, show/hide based on alert state." @click.away="show = false"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="pointer-events-auto w-full max-w-sm rounded-lg border-4 border-pink bg-white shadow-xl">
            <div class="shadow-xs overflow-hidden rounded-lg">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-pink">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium leading-5 text-black">
                                {{ session('status') }}
                            </p>
                        </div>
                        <div class="ml-4 flex flex-shrink-0">
                            <button @click="show = false"
                                class="inline-flex text-pink transition duration-150 ease-in-out focus:text-gray-500 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
