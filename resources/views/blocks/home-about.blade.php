<x-scroll-section data-bg="bg-pink" class="relative flex min-h-screen w-screen items-center text-white">
    <div class="container py-16">
        <h2 class="mb-8 flex flex-wrap text-4xl font-bold lg:text-5xl">
            @foreach (explode('###', wordwrap('We are standing up for Leeds’ community venues', 12, '###')) as $key => $word)
                <div class="@if ($loop->iteration == $loop->count - 1 || $loop->last) basis-full md:basis-auto @else basis-full @endif"">
                    <span class="mb-2 inline-block bg-blue px-1 text-white">{{ $word }}</span>
                </div>
            @endforeach
        </h2>

        <p class="mb-5 max-w-3xl text-xl 2xl:text-2xl">
            Our love for community venues runs deep. We want a sustainable future for creativity
            and community in Leeds and we’re inviting people to come together to help make that happen.
        </p>
        <p class="ticker-bold max-w-3xl text-xl 2xl:text-2xl">
            No Space Left to Play is a platform for <strong>reflection on</strong>, <strong>discussion around</strong>
            and <strong>action to change</strong> the trajectory
            of development in our city so that our creative and community spaces thrive.
        </p>
    </div>

    <div class="absolute -top-12 right-0 w-1/3 md:top-1/3 md:translate-x-1/3 lg:w-1/2">

        <svg class="h-auto w-[50vw] origin-center animate-spin-slow" xmlns="http://www.w3.org/2000/svg" width="734.18"
            height="742.58" viewBox="0 0 734.18 742.58">
            <path class="transition-all delay-500 duration-1000"
                :class="{
                    'stroke-[50px]': shown
                }" fill="none" stroke="#fff"
                stroke-linecap="round" stroke-miterlimit="10" stroke-width="0"
                d="M26.4 390.68c-8-86.85 32.86-154.8 130.65-206.09 19.74-10.35 33.67-22.39 41.17-38.67 9.93-21.52 22.65-42.47 40.9-61.69 24.89-26.21 59.21-42.75 106.31-46.41 8.9-.69 16.62-3.74 24.95-5.54 59.07-12.73 116.23-6.72 171.11 9.74 58.43 17.53 99.07 47.34 126.85 85.6 37.67 51.88 47.15 106.14 36 162.82-6.85 35-15.83 70-10.64 105.6 3.67 25.22 6.14 50.52 8.62 75.81 4 40.8 1.22 81.16-14.68 121-21.51 53.89-74.34 88-150.86 107-47.73 11.79-97.73 19.3-148.73 16.85-139.75-6.58-272.6-56.4-319.23-155.86-15.31-32.65-29.78-65.35-35.82-99.41a476.89 476.89 0 0 1-6.6-70.75Z" />
        </svg>
    </div>

</x-scroll-section>
