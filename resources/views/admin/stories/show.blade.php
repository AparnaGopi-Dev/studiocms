@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-semibold mb-4">
    {{ $story->title }}
</h1>

<p class="text-gray-600 mb-6">
    {{ $story->description }}
</p>

<!-- 👇 PUT YOUR GALLERY HERE -->
<div class="grid grid-cols-3 gap-4 mt-6">

    @foreach($story->photos as $photo)

        <img src="{{ asset('storage/'.$photo->image) }}"
             class="rounded-lg object-cover h-32 w-full">

    @endforeach

</div>

@endsection