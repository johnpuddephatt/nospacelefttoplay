<x-scroll-section data-bg="bg-green" id="create-memories" class="">
    <div class="container overflow-hidden py-8">
        <h2 class="mb-4 font-serif text-6xl uppercase italic leading-[0.85] text-white lg:text-8xl"
            style="word-spacing: 999px">
            Share your memories
        </h2>
        <p class="mb-8 max-w-4xl text-xl text-white">
            We want to collect memories and anecdotes from people across
            Leeds of their favourite community spaces. This can be music
            venues, art spaces, exhibitions etc...
        </p>
        <livewire:create-memory />
    </div>
</x-scroll-section>

<x-scroll-section data-bg="bg-green">
    <div class="container overflow-hidden py-8">

        <livewire:show-memories />
    </div>
</x-scroll-section>
