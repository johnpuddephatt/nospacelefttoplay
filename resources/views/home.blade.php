@extends('layouts.app')

@section('content')
    <div x-data="{ currentSection: null, backgroundColor: 'bg-pink' }" @newsection="currentSection = $event.detail.id, backgroundColor = $event.detail.color"
        :class="backgroundColor" class="overflow-hidden transition duration-1000">

        @include('blocks.home-hero')
        @include('blocks.home-about')
        @include('blocks.home-memories')
        @include('blocks.home-join')

    </div>
@endsection
