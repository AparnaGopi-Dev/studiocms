<section id="stories" class="py-28 px-6 bg-white">


    <div class="max-w-7xl mx-auto">


        <!-- Section Heading -->

        <div class="flex justify-between items-end mb-14">


            <div>

                <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-4">
                    Portfolio
                </p>


                <h2 class="text-4xl md:text-6xl font-light tracking-tight">
                    Featured Stories
                </h2>


            </div>


            <a href="/stories"
               class="hidden md:block text-sm tracking-wide text-gray-700 hover:text-black transition">

                View All Stories →
                
            </a>


        </div>



        @php
            $stories = \App\Models\Story::latest()->take(3)->get();
        @endphp



        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">



            @forelse($stories as $story)



                <article 
                class="group relative overflow-hidden rounded-3xl h-[480px] bg-black">



                    @if($story->cover_image)


                        <img
                        src="{{ asset('storage/'.$story->cover_image) }}"
                        alt="{{ $story->title }}"
                        class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 group-hover:brightness-75">

                    @else

                        <div class="w-full h-full bg-gray-200"></div>

                    @endif

                    <!-- Dark Overlay -->

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                    <!-- Content -->

                    <div class="absolute bottom-0 left-0 p-8 text-white">

                        <p class="uppercase tracking-[0.25em] text-xs text-gray-300 mb-3">

                            Photography Story

                        </p>

                        <h3 class="text-3xl font-light mb-6">

                            {{ $story->title }}

                        </h3>

                        <a href="#"
                           class="inline-flex items-center text-sm tracking-wide border border-white/60 px-6 py-3 rounded-full hover:bg-white hover:text-black transition duration-300">

                            Explore Story →

                        </a>

                    </div>

                </article>

            @empty

                <p class="text-gray-500">
                    No stories available yet.
                </p>

            @endforelse

        </div>

    </div>

</section>