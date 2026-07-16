<section class="py-28 px-6 reveal">


    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">



        <!-- Image -->

        <div class="relative group overflow-hidden rounded-3xl">


            <img
            src="{{ asset('images/about/about.jpg') }}"
            class="w-full h-[650px] object-cover transition duration-1000 group-hover:scale-105"
            alt="About Studio">



            <!-- Image Overlay -->

            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition duration-700"></div>



        </div>





        <!-- Content -->

        <div>



            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">

                About Studio

            </p>





            <h2 class="text-4xl md:text-6xl font-light leading-tight tracking-tight">


                Creating timeless memories through photography


            </h2>





            <p class="mt-8 text-gray-600 leading-relaxed text-lg">


                Every photograph carries a story.
                We capture genuine emotions, natural expressions,
                and the beautiful details that make every celebration unique.


            </p>





            <!-- Stats -->


            <div class="grid grid-cols-2 gap-10 mt-12 border-t pt-10">



                <div>


                    <h3 class="text-5xl font-light">

                        10+

                    </h3>


                    <p class="mt-2 text-gray-500 uppercase tracking-wider text-sm">

                        Years Experience

                    </p>


                </div>





                <div>


                    <h3 class="text-5xl font-light">

                        500+

                    </h3>


                    <p class="mt-2 text-gray-500 uppercase tracking-wider text-sm">

                        Stories Captured

                    </p>

                </div>

            </div>

            <a href="{{ route('about') }}"
               class="inline-flex items-center mt-12 px-10 py-4 rounded-full border border-black text-sm tracking-wide hover:bg-black hover:text-white transition duration-300">

                Discover Our Story →

            </a>

        </div>

    </div>

</section>