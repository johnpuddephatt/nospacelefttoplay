<div>
    <div class="flex gap-2">
        <h2 class="mb-4 mt-8 text-4xl text-white">Memories</h2>
        <svg wire:loading class="ml-2 inline-block h-10 w-10 animate-spin text-white" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
            </circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>
        <div class="ml-auto">
            {{ $memories->links(data: ['scrollTo' => 'paginated-memories']) }}
        </div>
    </div>
    <div id="paginated-memories" class="mt-5 grid grid-flow-dense gap-8 pb-16 md:grid-cols-2 xl:grid-cols-3 xl:gap-12">
        @foreach ($memories as $memory)
            <div x-data="{ shownOnce: false }" x-intersect.once="shownOnce = true"
                :class="{ 'opacity-0  scale-90 rotate-12': !shownOnce }"
                class="{{ $memory->image && strlen($memory->text) > 200 ? 'md:col-span-2 flex-col md:flex-row gap-6' : 'flex-col aspect-[0.8]' }} random-delay flex overflow-hidden border-4 border-pink bg-white transition duration-500">
                @if ($memory->image)
                    <img src="{{ Storage::url($memory->image) }}" alt="{{ $memory->name }}"
                        class="{{ strlen($memory->text) > 200 ? 'w-full md:w-1/2 aspect-video md:aspect-[0.8]' : 'w-full aspect-video' }} h-auto object-cover">
                @endif
                <div
                    class="@if ($memory->image) ml-[4px] w-full aspect-[0.8] @else @endif flex flex-grow flex-col justify-between p-4 pt-6 sm:p-8 sm:pt-12">
                    <p class="leading-tight 2xl:text-lg">{{ $memory->text }}</p>
                    <div class="mt-4 flex flex-row items-end justify-between">
                        <h3 class="text font-bold">{{ $memory->user->name }}</h3>
                        <div class="text-right text-gray-500">{{ $memory->created_at->diffForHumans() }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
