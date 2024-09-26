 <div class="container flex flex-row items-start justify-end gap-2 py-4">

     @if ($show_logo ?? false)
         <a href="/" class="font-serif text-4xl uppercase !leading-[0.85]">
             @foreach (['No', '_Space', 'Left', 'To', 'Play'] as $key => $word)
                 <div class="{{ $key == 2 ? 'mt-2' : null }} {{ $key > 1 ? 'text-pink' : 'text-blue' }}">
                     {{ $word }}
                 </div>
             @endforeach
         </a>
     @endif
     <a class="{{ $border ?? 'border-white' }} {{ $text ?? 'text-black' }} z-10 ml-auto inline-block border p-4"
         href="/about">About us</a>
     <a class="{{ $bg ?? 'bg-white' }} {{ isset($bg) && $bg == 'bg-white' ? 'text-black border-white' : 'border-black text-white' }} z-10 inline-block border p-4"
         href="/#section-5">Join the movement</a>
 </div>
