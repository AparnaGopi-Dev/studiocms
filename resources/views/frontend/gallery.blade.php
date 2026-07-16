@extends('layouts.website')

@section('content')


<section class="pt-40 pb-28 bg-[#faf9f7] px-6">


    <div class="max-w-7xl mx-auto">


        <!-- Heading -->

        <div class="text-center mb-20">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">
                Gallery
            </p>


            <h1 class="text-5xl md:text-7xl font-light tracking-tight">
                Moments Captured
            </h1>


            <p class="mt-8 text-gray-600 max-w-2xl mx-auto leading-relaxed">

                A collection of emotions, celebrations and timeless memories.

            </p>


        </div>



        @php

            $galleryImages = collect(File::files(public_path('images/gallery')))
                ->map(function ($file) {
                    return 'gallery/' . $file->getFilename();
                });

        @endphp




        <!-- Gallery Grid -->

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            @foreach($galleryImages as $index => $image)


                <div
                    class="group overflow-hidden rounded-3xl 
                    {{ $index % 5 == 1 ? 'md:h-[600px]' : 'md:h-[450px]' }}
                    h-[450px]">


                    <img
                        src="{{ asset('images/'.$image) }}"
                        alt="Gallery Image"
                        class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">


                </div>


            @endforeach


        </div>



    </div>


</section>


@endsection