@extends('layouts.admin')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold">Stories</h1>

    <a href="{{ route('admin.stories.create') }}"
       class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
        + Add Story
    </a>
</div>

@if($stories->count())

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach($stories as $story)

        <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition duration-300">

            {{-- Cover Image --}}
            @if($story->cover_image)
                <img src="{{ asset('storage/'.$story->cover_image) }}"
                     class="w-full h-52 object-cover">
            @else
                <div class="w-full h-52 bg-gray-200 flex items-center justify-center text-gray-500">
                    No Cover Image
                </div>
            @endif

            <div class="p-5">

                <h2 class="text-lg font-semibold mb-2">
                    {{ $story->title }}
                </h2>

                <p class="text-sm text-gray-500">
                    {{ Str::limit($story->description, 90) }}
                </p>

                <div class="flex items-center justify-between mt-5">

                    <span class="text-xs text-gray-400">
                        {{ $story->created_at->diffForHumans() }}
                    </span>

                    <div class="flex gap-4">

                        <a href="{{ route('admin.stories.show', $story->id) }}"
                           class="text-blue-600 hover:underline text-sm">
                            View
                        </a>

                        <a href="{{ route('admin.stories.edit', $story->id) }}"
                           class="text-green-600 hover:underline text-sm">
                            Edit
                        </a>

                    </div>

                </div>

            </div>

        </div>

    @endforeach

</div>

@else

<div class="bg-white rounded-xl p-10 text-center text-gray-500 shadow-sm">
    No stories created yet.
</div>

@endif

@endsection