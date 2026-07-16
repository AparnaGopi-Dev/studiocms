@extends('layouts.website')

@section('content')


<section class="pt-40 pb-28 bg-[#faf9f7] px-6">


    <div class="max-w-5xl mx-auto">


        <!-- Story Header -->

        <div class="text-center mb-16">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">
                Story
            </p>


            <h1 class="text-5xl md:text-7xl font-light tracking-tight">
                {{ $story->title }}
            </h1>


        </div>




        <!-- Cover Image -->

        @if($story->cover_image)

            <div class="rounded-3xl overflow-hidden mb-16">

                <img
                    src="{{ asset('storage/' . $story->cover_image) }}"
                    alt="{{ $story->title }}"
                    class="w-full h-[600px] object-cover">

            </div>

        @endif





        <!-- Description -->

        <div class="max-w-3xl mx-auto mb-20">


            <p class="text-gray-700 leading-9 text-lg">

                {{ $story->description }}

            </p>


        </div>





        <!-- Story Gallery -->

        @if($story->photos && $story->photos->count())


            <div class="mb-20 text-center">


                <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">
                    Gallery
                </p>


                <h2 class="text-4xl font-light">
                    Moments From This Story
                </h2>


            </div>





            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">


                @foreach($story->photos as $photo)


                    <div class="rounded-3xl overflow-hidden group">


                        <img
                            src="{{ asset('storage/' . $photo->image) }}"
                            alt="{{ $story->title }}"
                            class="w-full h-[500px] object-cover transition duration-1000 group-hover:scale-110">


                    </div>


                @endforeach


            </div>


        @endif



    </div>


</section>



@endsection