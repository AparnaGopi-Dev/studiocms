@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-semibold mb-8">Stories</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @foreach($stories as $story)

            <a href="{{ route('stories.show', $story->id) }}"
               class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                @if($story->cover_image)
                    <img src="{{ asset('storage/'.$story->cover_image) }}"
                         class="h-56 w-full object-cover">
                @endif

                <div class="p-4">
                    <h2 class="font-semibold text-lg">
                        {{ $story->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ Str::limit($story->description, 80) }}
                    </p>
                </div>

            </a>

        @endforeach

    </div>

</div>

@endsection