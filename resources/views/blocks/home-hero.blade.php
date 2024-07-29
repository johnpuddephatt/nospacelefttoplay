<x-scroll-section data-bg="bg-blue" class="relative flex h-screen w-screen items-end text-white md:items-center">
    <div class="absolute left-0 top-0 z-20 h-full w-full">
        @include('partials.navbar', [
            'show_logo' => false,
            'bg' => 'bg-white',
            'border' => 'border-white',
            'text' => 'text-white',
        ])
    </div>

    <div class="container py-4">
        <h1 class="font-serif text-7xl uppercase !leading-[0.85] lg:text-9xl 2xl:text-10xl">
            @foreach (['No', '_Space', 'Left', 'To', 'Play'] as $key => $word)
                <div class="dynamic-delay {{ $key == 2 ? 'mt-4' : null }} {{ $key > 1 ? 'text-pink' : null }} translate-x-[-50vw] opacity-0 transition duration-1000"
                    :class="{
                        '!translate-x-0  !opacity-100': shown,
                        '!delay-0 ': !shown,
                    }">
                    {{ $word }}
                </div>
            @endforeach
        </h1>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="966.26" height="1578.57" viewBox="0 0 966.26 1578.57"
        class="absolute -top-12 right-0 h-auto w-3/4 -rotate-45 text-pink transition md:left-1/2 md:right-auto md:w-[50vw] md:rotate-0">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="63"
            stroke-dasharray="3700" stroke-dashoffset="-3700"
            class="delay-750 transition-all duration-1000 ease-linear md:duration-[1500ms]"
            :class="{
                'dashoffset-0': shown,
            }"
            d="M448.49 1547.07s-244.53-296.31-128.94-299.33c264.79-6.9 40.16-140.61 191.17-261.89 135.6-108.92 324.72 213.72 412.3-3.67 91.33-226.71-379.48-156.53-404.26-299.81s84.73-192.19-45.77-283.07C280.13 265.01 231.62 717.37 84.06 458.14s50.82-416.21 163-362.25c174.67 84 318.15 261 436.06-64.39" />
    </svg>
</x-scroll-section>
