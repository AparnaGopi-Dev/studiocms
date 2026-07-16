@extends('layouts.website')

@section('content')

<section class="pt-40 pb-28 bg-[#faf9f7] px-6">


    <div class="max-w-7xl mx-auto">


        <!-- Heading -->

        <div class="text-center mb-20">


            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-5">
                Contact
            </p>


            <h1 class="text-5xl md:text-7xl font-light tracking-tight">
                Let's Create Something Beautiful
            </h1>


            <p class="mt-8 text-gray-600 max-w-2xl mx-auto leading-relaxed">

                Have a question or planning a special moment?
                We'd love to hear from you.

            </p>


        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">



            <!-- Contact Information -->

            <div class="bg-white rounded-3xl p-10 border border-gray-100">


                <h2 class="text-3xl font-light mb-8">
                    Get In Touch
                </h2>


                <div class="space-y-6 text-gray-600">


                    <div>

                        <p class="text-xs uppercase tracking-[0.3em] text-gray-400 mb-2">
                            Email
                        </p>

                        <p>
                            hello@storiesfromamruthgopi.com
                        </p>

                    </div>



                    <div>

                        <p class="text-xs uppercase tracking-[0.3em] text-gray-400 mb-2">
                            Phone
                        </p>

                        <p>
                            +91 XXXXX XXXXX
                            +44 7502962729
                        </p>

                    </div>



                    <div>

                        <p class="text-xs uppercase tracking-[0.3em] text-gray-400 mb-2">
                            Location
                        </p>
                        <p>
                            Brighton,England,BN2 1HB,UK
                        </p>
                        <p>
                            Kerala, India
                        </p>

                    </div>


                </div>



               <div class="mt-10">


    <p class="text-xs uppercase tracking-[0.3em] text-gray-400 mb-4">
        Follow Our Work
    </p>


    <div class="flex gap-5">


        <!-- Instagram -->

        <a href="https://www.instagram.com/stories_from_amruthgopi?igsh=MzZ6cGZnY3dhc2hn"
           target="_blank"
           class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-black hover:text-white transition text-lg">

            <i class="fa-brands fa-instagram"></i>

        </a>

        <!-- Facebook -->

        <a href="https://www.facebook.com/share/1BCiaALHrZ/?mibextid=wwXIfr"
           target="_blank"
           class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-black hover:text-white transition text-lg">

            <i class="fa-brands fa-facebook-f"></i>

        </a>

        <!-- WhatsApp -->

        <a href="https://wa.me/YOUR_NUMBER"
           target="_blank"
           class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-black hover:text-white transition text-lg">

            <i class="fa-brands fa-whatsapp"></i>

        </a>


    </div>


</div>


            </div>





            <!-- Contact Form -->

            <div class="bg-white rounded-3xl p-10 border border-gray-100">


                <h2 class="text-3xl font-light mb-8">
                    Send A Message
                </h2>


                <form class="space-y-5">


                    <input
                        type="text"
                        placeholder="Your Name"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black">



                    <input
                        type="email"
                        placeholder="Your Email"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black">



                    <input
                        type="text"
                        placeholder="Phone Number"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black">



                    <textarea
                        rows="5"
                        placeholder="Your Message"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"></textarea>



                    <button
                        type="submit"
                        class="px-10 py-4 rounded-full bg-black text-white text-sm tracking-wide hover:bg-gray-800 transition">

                        Send Message →

                    </button>


                </form>


            </div>



        </div>


    </div>


</section>


@endsection