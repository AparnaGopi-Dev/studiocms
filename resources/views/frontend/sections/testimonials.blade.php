<section class="py-28 bg-[#faf9f7] px-6 reveal">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-20">

            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-4">
                Testimonials
            </p>

            <h2 class="text-4xl md:text-6xl font-light tracking-tight">
                Kind Words
            </h2>

            <p class="mt-6 text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Heartfelt words from the wonderful people
                who trusted us to capture their stories.
            </p>

        </div>


        @php

            $testimonials = [

                [
                    'message' => 'The photographs brought tears to our eyes. Every emotion was beautifully preserved.',
                    'name' => 'Anjali & Rahul',
                    'type' => 'Maternity Session',
                    'image' => 'images/testimonials/testimonial1.jpeg',
                ],

                [
                    'message' => 'These photographs are treasures for our family. We could not have asked for anything better.',
                    'name' => 'Harikrishnan & Veni',
                    'type' => 'Couple Shoot',
                    'image' => 'images/testimonials/testimonial2.jpeg',
                ],
                [
                    'message' => 'Working with Amruth felt effortless. The entire experience was warm, relaxed and memorable.',
                    'name' => 'Emil & Tinu',
                    'type' => 'Wedding Stories',
                    'image' => 'images/testimonials/testimonial3.jpeg',
                ],

            ];

        @endphp



        <!-- Testimonials -->

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            @foreach($testimonials as $testimonial)


                <div class="bg-white rounded-3xl p-10 border border-gray-100 shadow-sm transition duration-500 hover:-translate-y-2 hover:shadow-xl">


                    <!-- Quote -->

                    <div class="text-7xl text-gray-100 leading-none mb-8">
                        “
                    </div>



                    <!-- Message -->

                    <p class="text-gray-700 leading-8 mb-8">
                        {{ $testimonial['message'] }}
                    </p>



                    <!-- Client -->

                    <div class="flex items-center gap-4">


                        <img
                            src="{{ asset($testimonial['image']) }}"
                            alt="{{ $testimonial['name'] }}"
                            class="w-14 h-14 rounded-2xl object-cover"
                        >


                        <div>

                            <p class="uppercase tracking-[0.15em] text-xs text-gray-700">
                                {{ $testimonial['name'] }}
                            </p>


                            <p class="text-sm text-gray-500 mt-1">
                                {{ $testimonial['type'] }}
                            </p>

                        </div>


                    </div>


                </div>


            @endforeach


        </div>


    </div>


</section>