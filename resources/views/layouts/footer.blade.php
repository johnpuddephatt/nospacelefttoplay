<footer class="bg-blue pb-10 pt-12 text-white">
    <div class="container flex flex-col justify-between md:flex-row">
        <a href="/" class="font-serif text-4xl uppercase !leading-[0.85]">
            @foreach (['No', '_Space', 'Left', 'To', 'Play'] as $key => $word)
                <div class="{{ $key == 2 ? 'mt-2' : null }} {{ $key > 1 ? 'text-pink' : null }}">
                    {{ $word }}
                </div>
            @endforeach
        </a>

        <div class="self-end text-blue">
            <a class="inline-block rounded-full bg-white p-2" aria-label="No Space Left To Play on Instagram"
                href="https://www.instagram.com/nospacelefttoplay/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 2xl:h-8 2xl:w-8" width="13.286"
                    height="13.29" viewBox="0 0 13.286 13.29">
                    <g fill="currentColor">
                        <path
                            d="M9.758 13.291H3.533a.892.892 0 0 0-.116-.03 3.867 3.867 0 0 1-3.41-3.822q-.013-2.794 0-5.587A3.863 3.863 0 0 1 3.836.008q2.81-.017 5.62 0a3.845 3.845 0 0 1 3.623 2.641c.095.287.139.59.207.886v6.227c-.011.049-.025.1-.033.148a3.815 3.815 0 0 1-2.592 3.167 7.252 7.252 0 0 1-.9.214m-3.12-3.322a3.321 3.321 0 1 0-3.316-3.326 3.326 3.326 0 0 0 3.316 3.326m4.431-7.192a.553.553 0 1 0-.552.549.558.558 0 0 0 .552-.549"
                            data-name="Path 870" transform="translate(0 -.001)" />
                        <path d="M130.034 127.852a2.214 2.214 0 1 1-2.221 2.2 2.216 2.216 0 0 1 2.221-2.2"
                            data-name="Path 871" transform="translate(-123.382 -123.419)" />
                    </g>
                </svg>

            </a>

            <a class="inline-block rounded-full bg-white p-2" aria-label="No Space Left To Play on Facebook"
                href="https://www.facebook.com/profile.php?id=61553886161027" target="_blank">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="inline-block h-6 w-6 2xl:h-8 2xl:w-8" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
        </div>
    </div>
</footer>
