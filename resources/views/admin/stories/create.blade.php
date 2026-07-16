@extends('layouts.admin')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-semibold mb-6">Create Story</h1>

    <form method="POST" action="{{ route('admin.stories.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-sm mb-1">Title</label>
            <input type="text" name="title"
                   class="w-full border rounded-lg p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm mb-1">Description</label>
            <textarea name="description"
                      class="w-full border rounded-lg p-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm mb-1">Cover Image</label>
            <input type="file" name="cover_image"
                class="w-full border rounded-lg p-2">
        </div>

        <button class="bg-black text-white px-4 py-2 rounded-lg">
            Save Story
        </button>

    </form>

</div>

@endsection