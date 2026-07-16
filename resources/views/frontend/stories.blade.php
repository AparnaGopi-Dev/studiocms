@extends('layouts.website')

@section('content')


<section class="pt-40 pb-28 bg-[#faf9f7] px-6">


    <div class="max-w-7xl mx-auto">


        <!-- Heading -->

        <div class="text-center mb-20">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">
                Stories
            </p>


            <h1 class="text-5xl md:text-7xl font-light tracking-tight">
                Moments That Tell A Story
            </h1>


            <p class="mt-8 text-gray-600 max-w-2xl mx-auto leading-relaxed">

                Explore heartfelt stories, emotions and memories
                captured through our lens.

            </p>


        </div>




        <!-- Stories Grid -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


            @foreach($stories as $story)


                <a href="{{ route('stories.show', $story->id) }}"
                   class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition duration-500">



                    <!-- Image -->

                    <div class="overflow-hidden h-[350px]">


                        @if($story->cover_image)

                            <img
                                src="{{ asset('storage/' . $story->cover_image) }}"
                                alt="{{ $story->title }}"
                                class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">

                        @else

                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                No Image
                            </div>

                        @endif


                    </div>




                    <!-- Content -->

                    <div class="p-8">


                        <h2 class="text-2xl font-light tracking-wide mb-4">
                            {{ $story->title }}
                        </h2>



                        <p class="text-gray-600 leading-7">

                            {{ \Illuminate\Support\Str::limit($story->description, 120) }}

                        </p>



                        <div class="mt-6 text-sm uppercase tracking-[0.2em] text-gray-500">

                            Read Story →

                        </div>


                    </div>



                </a>


            @endforeach


        </div>



    </div>


</section>


@endsection