@extends('layouts.website')

@section('content')

@php

    $categoryName = str_replace('-', ' ', $slug);

    $folderPath = public_path('images/portfolio/' . $slug);

    $images = [];

    if (File::exists($folderPath)) {

        $files = File::files($folderPath);

        foreach ($files as $file) {

            if ($file->getFilename() != 'cover.jpeg') {

                $images[] = $file->getFilename();

            }

        }

    }

@endphp


<section class="bg-black text-white pt-32 pb-20">


    <div class="max-w-7xl mx-auto px-6">


        <!-- Heading -->

        <div class="text-center mb-16">

            <h1 class="text-5xl font-light capitalize">
                {{ $categoryName }}
            </h1>

            <p class="mt-5 text-gray-400">
                Beautiful moments captured with timeless emotions.
            </p>

        </div>



        <!-- Cover Image -->

        @if(File::exists(public_path('images/portfolio/'.$slug.'/cover.jpeg')))

            <div class="mb-16 overflow-hidden">

                <img 
                    src="{{ asset('images/portfolio/'.$slug.'/cover.jpeg') }}"
                    class="w-full h-[600px] object-cover"
                    alt="{{ $categoryName }}"
                >

            </div>

        @endif




        <!-- Gallery -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


            @foreach($images as $image)

                <div class="group overflow-hidden">

                    <img
                        src="{{ asset('images/portfolio/'.$slug.'/'.$image) }}"
                        class="w-full h-[400px] object-cover transition duration-700 group-hover:scale-110"
                        alt="{{ $categoryName }}"
                    >

                </div>

            @endforeach


        </div>


    </div>


</section>


@endsection