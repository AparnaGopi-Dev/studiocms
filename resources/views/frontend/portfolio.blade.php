@extends('layouts.website')

@section('content')

<section class="bg-black text-white py-32">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">

            <h1 class="text-5xl font-light tracking-wide">
                Our Portfolio
            </h1>

            <p class="mt-4 text-gray-400">
                Explore our photography collections
            </p>

        </div>


        <!-- Categories -->

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">


            <!-- Wedding -->

            <a href="{{ route('portfolio.show','wedding') }}"
               class="group relative overflow-hidden h-[450px]">

                <img src="{{ asset('images/portfolio/wedding/cover.jpeg') }}"
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex items-center justify-center">

                    <h2 class="text-4xl font-light">
                        Wedding Stories
                    </h2>

                </div>

            </a>

 <!-- Couples -->

            <a href="{{ route('portfolio.show','couples') }}"
               class="group relative overflow-hidden h-[450px]">

                <img src="{{ asset('images/portfolio/couples/cover.jpeg') }}"
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex items-center justify-center">

                    <h2 class="text-4xl font-light">
                        Couple Shoots
                    </h2>

                </div>

            </a>


            <!-- Maternity -->

            <a href="{{ route('portfolio.show','maternity') }}"
               class="group relative overflow-hidden h-[450px]">

                <img src="{{ asset('images/portfolio/maternity/cover.jpeg') }}"
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex items-center justify-center">

                    <h2 class="text-4xl font-light">
                        Maternity
                    </h2>

                </div>

            </a>

           
            <!-- Newborn -->

            <a href="{{ route('portfolio.show','newborn') }}"
               class="group relative overflow-hidden h-[450px]">

                <img src="{{ asset('images/portfolio/newborn/cover.jpeg') }}"
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex items-center justify-center">

                    <h2 class="text-4xl font-light">
                        Newborn
                    </h2>

                </div>

            </a>



        </div>

    </div>

</section>

@endsection