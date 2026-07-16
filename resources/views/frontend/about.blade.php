@extends('layouts.website')

@section('content')

<section class="pt-40 pb-28 bg-[#faf9f7] px-6">


    <div class="max-w-7xl mx-auto">


        <!-- Hero -->

        <div class="text-center max-w-4xl mx-auto mb-24">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-6">
                About Studio
            </p>


            <h1 class="text-5xl md:text-7xl font-light tracking-tight">
                Capturing emotions,
                <br>
                preserving memories.
            </h1>


            <p class="mt-8 text-gray-600 leading-relaxed max-w-2xl mx-auto">
                We believe photography is not just about beautiful images.
                It is about preserving genuine emotions, connections and
                moments that become timeless memories.
            </p>


        </div>




        <!-- Story Section -->

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-28">


            <div>

                <img
                    src="{{ asset('images/about/studio.jpg') }}"
                    alt="Photography Studio"
                    class="rounded-3xl w-full h-[600px] object-cover">

            </div>



            <div>


                <p class="uppercase tracking-[0.3em] text-xs text-gray-500 mb-5">
                    Our Story
                </p>


                <h2 class="text-4xl font-light mb-8">
                    Every photograph has a story
                </h2>


                <p class="text-gray-600 leading-8 mb-6">
                    From weddings filled with emotions to the quiet beauty
                    of motherhood and the innocence of newborn moments,
                    we capture stories that are authentic and meaningful.
                </p>


                <p class="text-gray-600 leading-8">
                    Our approach is simple — create a comfortable experience
                    where real moments naturally unfold.
                </p>


            </div>


        </div>





        <!-- Approach -->

        <div class="text-center mb-20">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-4">
                Our Approach
            </p>


            <h2 class="text-4xl md:text-5xl font-light">
                What Makes Us Different
            </h2>


        </div>



        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            <div class="bg-white rounded-3xl p-10 border border-gray-100">

                <h3 class="text-2xl font-light mb-4">
                    Natural Moments
                </h3>

                <p class="text-gray-600 leading-7">
                    Genuine emotions and authentic expressions captured naturally.
                </p>

            </div>



            <div class="bg-white rounded-3xl p-10 border border-gray-100">

                <h3 class="text-2xl font-light mb-4">
                    Creative Storytelling
                </h3>

                <p class="text-gray-600 leading-7">
                    Every session is crafted to tell your unique story.
                </p>

            </div>




            <div class="bg-white rounded-3xl p-10 border border-gray-100">

                <h3 class="text-2xl font-light mb-4">
                    Timeless Memories
                </h3>

                <p class="text-gray-600 leading-7">
                    Images created to be cherished for generations.
                </p>

            </div>


        </div>


    </div>


</section>

@endsection