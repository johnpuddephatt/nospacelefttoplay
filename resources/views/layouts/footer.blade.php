<footer class="bg-blue text-white">
    <div class="container">
        <h3 class="pb-10 pt-12 font-serif text-4xl uppercase !leading-[0.85]">
            @foreach (['No', '_Space', 'Left', 'To', 'Play'] as $key => $word)
                <div class="{{ $key == 2 ? 'mt-2' : null }} {{ $key > 1 ? 'text-pink' : null }}">
                    {{ $word }}
                </div>
            @endforeach
        </h3>
    </div>
</footer>
