@if ($paginator->hasPages())
    <nav class="flex flex-row gap-2" role="navigation" aria-label="Pagination Navigation">

        @if ($paginator->onFirstPage())
            <span class="inline-block rounded-full bg-white bg-opacity-80 p-2"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="h-8 w-8 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
        @else
            <button class="rounded-full bg-white p-2" wire:click="previousPage" wire:loading.attr="disabled"
                rel="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
        @endif

        @if ($paginator->onLastPage())
            <span class="inline-block rounded-full bg-white bg-opacity-80 p-2"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="h-8 w-8 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        @else
            <button class="rounded-full bg-white p-2" wire:click="nextPage" wire:loading.attr="disabled"
                rel="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        @endif

    </nav>
@endif
