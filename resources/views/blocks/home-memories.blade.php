<x-scroll-section data-bg="bg-green" id="create-memories" class="">
    <div class="container grid grid-cols-3 gap-8 overflow-hidden py-8 pb-8">
        <div class="col-span-2">
            <h2 class="mb-8 font-serif text-6xl uppercase italic leading-[0.85] text-white lg:text-8xl"
                style="word-spacing: 999px">
                Share your memories
            </h2>
            <p class="mb-3 max-w-3xl text-xl text-white 2xl:text-2xl">

                We want to tell the story of Leeds’ much-loved community spaces<span class="text-pink">*</span> through
                your anecdotes, memories and
                stories.</p>

            <p class="max-w-3xl text-xl text-white 2xl:text-2xl">

                This is our shared story about the spaces that bring us together to make stuff, practice, play, gain
                experience, grow confidence, build community and have fun.
                The spaces could be closed, going strong or in a precarious situation.

            </p>
        </div>
        <div class="mb-12 self-end text-2xl text-white">
            <h3 class="-mb-12 -indent-2 text-10xl leading-none text-pink">*</h3>
            <ul>
                <li>community centres</li>
                <li>music & dance spaces</li>
                <li>galleries</li>
                <li>workshops</li>
                <li>studios</li>
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
