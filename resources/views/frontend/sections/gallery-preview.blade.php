<section class="py-28 bg-white px-6 reveal">


    <div class="max-w-7xl mx-auto">


        <!-- Heading -->

        <div class="text-center mb-16">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-4">
                Portfolio
            </p>


            <h2 class="text-4xl md:text-6xl font-light tracking-tight">
                Explore Our Work
            </h2>


            <p class="mt-6 text-gray-600 max-w-2xl mx-auto leading-relaxed">

                Discover our favourite collections of weddings,
                motherhood, newborn and timeless moments.

            </p>


        </div>



        @php

            $categories = [

                [
                    'name' => 'Wedding Stories',
                    'slug' => 'wedding',
                    'image' => 'images/portfolio/wedding/cover.jpeg'
                ],

                [
                    'name' => 'Maternity',
                    'slug' => 'maternity',
                    'image' => 'images/portfolio/maternity/cover.jpeg'
                ],

                [
                    'name' => 'Newborn',
                    'slug' => 'newborn',
                    'image' => 'images/portfolio/newborn/cover.jpeg'
                ],

                [
                    'name' => 'Couple Shoots',
                    'slug' => 'couples',
                    'image' => 'images/portfolio/couples/cover.jpeg'
                ],

            ];

        @endphp




        <!-- Portfolio Category Cards -->

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">



            @foreach($categories as $category)


                <a href="{{ route('portfolio.show', $category['slug']) }}"
                   class="group relative overflow-hidden rounded-3xl h-[450px]">



                    <!-- Image -->

                    <img
                    src="{{ asset($category['image']) }}"
                    alt="{{ $category['name'] }}"
                    class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">



                    <!-- Overlay -->

                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/55 transition duration-700"></div>



                    <!-- Category Name -->

                    <div class="absolute inset-0 flex items-center justify-center">


                        <h3 class="text-white text-4xl font-light tracking-wide">

                            {{ $category['name'] }}

                        </h3>


                    </div>



                </a>


            @endforeach



        </div>




        <!-- Button -->


        <div class="text-center mt-14">


            <a href="{{ route('portfolio.index') }}"
               class="inline-flex items-center px-10 py-4 border border-black rounded-full text-sm tracking-wide hover:bg-black hover:text-white transition duration-300">


                Explore Full Portfolio →

            </a>


        </div>



    </div>


</section>