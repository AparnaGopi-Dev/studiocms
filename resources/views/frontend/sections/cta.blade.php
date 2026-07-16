<section class="relative py-32 px-6 overflow-hidden reveal">


    <!-- Background Image -->

    <div class="absolute inset-0">

        <img
        src="{{ asset('images/hero/cta_bg.jpeg') }}"
        alt="Book Photography Session"
        class="w-full h-full object-cover">

    </div>




    <!-- Overlay -->

    <div class="absolute inset-0 bg-black/70"></div>





    <!-- Content -->

    <div class="relative max-w-4xl mx-auto text-center text-white">



        <p class="uppercase tracking-[0.4em] text-xs text-gray-300 mb-6">

            Let's Create Memories

        </p>





        <h2 class="text-4xl md:text-6xl font-light leading-tight">

            Ready to tell your story?

        </h2>





        <p class="mt-6 text-gray-300 text-lg max-w-2xl mx-auto">

            From weddings to portraits and special celebrations,
            we capture moments that remain timeless.

        </p>





        <div class="flex flex-col sm:flex-row justify-center gap-5 mt-10">



            <a href="{{ route('booking') }}"
               class="px-10 py-4 rounded-full bg-white text-black hover:bg-gray-200 transition">

                Book Your Session

            </a>


            <a href="/gallery"
               class="px-10 py-4 rounded-full border border-white hover:bg-white hover:text-black transition">

                View Gallery

            </a>



        </div>



    </div>



</section>