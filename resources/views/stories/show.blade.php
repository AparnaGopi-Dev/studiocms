@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-semibold mb-3">
        {{ $story->title }}
    </h1>

    <p class="text-gray-600 mb-8">
        {{ $story->description }}
    </p>

    @if($story->cover_image)
        <img src="{{ asset('storage/'.$story->cover_image) }}"
             class="w-full rounded-xl mb-10">
    @endif

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        @foreach($story->photos as $photo)

            <img src="{{ asset('storage/'.$photo->image) }}"
                 class="rounded-lg h-48 w-full object-cover">

        @endforeach

    </div>

</div>

@endsection