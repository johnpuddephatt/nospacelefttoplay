@extends('layouts.app', ['body_class' => 'bg-gray'])

@section('content')
    <div class="min-h-screen overflow-hidden">

        <svg x-data="{ shown: false }" x-init="shown = true"
            class="pointer-events-none fixed -right-32 top-8 -z-10 h-auto w-3/4 lg:w-2/3" xmlns="http://www.w3.org/2000/svg"
            width="330.42mm" height="533.8mm" viewBox="0 0 936.62 1513.14">

            <path fill="none" stroke="#ccc5ca" stroke-miterlimit="10" stroke-width="55.12" stroke-dasharray="3700"
                stroke-dashoffset="-3700" class="delay-750 transition-all duration-1000 ease-linear md:duration-[1500ms]"
                :class="{
                    'dashoffset-0': shown,
                }"
                d="M77.81 1505.27s-111.57-374.11-2.2-331.18c250.56 98.35 93.25-115.7 282.59-169.44 170-48.26 219.31 328.56 387.33 159.76 175.21-176-293.2-296.7-259.68-440.6s155.37-146.34 69.2-283c-127.33-202-351.8 202.14-387.28-98.89s212.32-369.42 296-274.5c130.24 147.74 320.05 409.55 446.87 49.26"
                opacity=".15" />
        </svg>

        @include('partials.navbar', [
            'show_logo' => true,
            'bg' => 'bg-blue',
            'border' => 'border-blue',
            'text' => 'text-blue',
        ])
        <header>
            <h1
                class="container mb-8 mt-24 max-w-4xl font-serif text-5xl uppercase leading-[0.85] text-green md:text-6xl lg:text-7xl">
                {{ $page->title }}_</h1>
        </header>
        <div class="prose container mb-24 mt-8 max-w-4xl">
            {!! $page->content !!}
        </div>
    </div>
@endsection
