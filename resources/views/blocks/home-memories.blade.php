<x-scroll-section data-bg="bg-green" id="create-memories" class="">
    <div class="container flex flex-col gap-12 overflow-hidden py-8 pb-8 lg:flex-row">
        <div class="max-w-3xl">
            <h2 class="mb-6 font-serif text-6xl uppercase italic leading-[0.85] text-white lg:text-8xl"
                style="word-spacing: 999px">
                Share your memories
            </h2>
            <div class="mb-12 inline-block bg-pink p-2 text-lg text-white lg:text-3xl">What do Leeds’ community venues
                mean to you?
            </div>
            <p class="mb-5 text-xl text-white 2xl:text-2xl">

                We want to tell the story of Leeds’ much-loved community spaces<span class="text-pink">*</span> through
                your anecdotes, memories and
                stories.</p>

            <p class="text-xl text-white 2xl:text-2xl">

                This is our shared story about the spaces that bring us together to make stuff, practice, play, gain
                experience, grow confidence, build community and have fun.
                The spaces could be closed, going strong or in a precarious situation.

            </p>
        </div>
        <div class="flex flex-row gap-2 text-xl text-white lg:self-end 2xl:text-2xl">
            <h3 class="-mt-6 -indent-2 text-10xl leading-none text-pink">*</h3>
            <ul>
                <li>community centres</li>
                <li>galleries</li>
                <li>workshops</li>
                <li>studios</li>
                <li>music & dance spaces</li>
            </ul>
        </div>

    </div>
    <livewire:create-memory />
</x-scroll-section>

<x-scroll-section data-bg="bg-green">
    <div class="container overflow-hidden py-8">
        <livewire:show-memories />
    </div>
</x-scroll-section>
