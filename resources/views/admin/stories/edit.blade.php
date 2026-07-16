@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-semibold mb-6">
    Edit Story
</h1>

{{-- Story Update Form --}}
<div class="bg-white rounded-xl shadow-sm p-6 mb-8">

<form method="POST"
      action="{{ route('admin.stories.update', $story->id) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-5">

        <label class="block text-sm font-medium mb-2">
            Title
        </label>

        <input type="text"
               name="title"
               value="{{ old('title', $story->title) }}"
               class="w-full border rounded-lg p-3">
               @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

    </div>

  <div class="mb-5">

    <label class="block text-sm font-medium mb-2">
        Description
    </label>

    <textarea
        name="description"
        rows="5"
        class="w-full border rounded-lg p-3">{{ old('description', $story->description) }}
    </textarea>
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
</div>

<div class="mb-5">

    <label class="block text-sm font-medium mb-2">
        Cover Image
    </label>

    @if($story->cover_image)
        <img src="{{ asset('storage/'.$story->cover_image) }}"
             class="w-48 rounded-lg mb-3">
    @endif

    <input
        type="file"
        name="cover_image"
        class="w-full border rounded-lg p-3">
        @error('cover_image')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

</div>

<button
    class="bg-black text-white px-5 py-3 rounded-lg hover:bg-gray-800">
    Update Story
</button>

</form>

</div>

{{-- Gallery Upload --}}
<div class="bg-white rounded-xl shadow-sm p-6 mb-8">

<h2 class="text-xl font-semibold mb-4">
    Gallery Images
</h2>

<form method="POST"
      action="{{ route('admin.photos.store', $story->id) }}"
      enctype="multipart/form-data">

    @csrf

    <input
        type="file"
        name="images[]"
        multiple
        class="w-full border rounded-lg p-3">
@error('images')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
@enderror
    <button
        class="mt-4 bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700">

        Upload Images

    </button>

</form>

</div>

{{-- Existing Images --}}
<div class="bg-white rounded-xl shadow-sm p-6">

<h2 class="text-xl font-semibold mb-5">
    Uploaded Gallery
</h2>

@if($story->photos->count())

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">

@foreach($story->photos as $photo)

<div class="relative group">

    <img
        src="{{ asset('storage/'.$photo->image) }}"
        class="rounded-lg object-cover w-full h-48 shadow">

    <form method="POST"
          action="{{ route('admin.photos.destroy', $photo->id) }}"
          class="absolute top-2 right-2 hidden group-hover:block">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-600 text-white text-xs px-2 py-1 rounded hover:bg-red-700">
            🗑
        </button>

    </form>

</div>

@endforeach

</div>

@else

<p class="text-gray-500">
    No gallery images uploaded yet.
</p>

@endif

</div>

@endsection