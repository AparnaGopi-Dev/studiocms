<footer class="bg-black text-white mt-20">


    <div class="max-w-7xl mx-auto px-6 py-16">


        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">


            <!-- Brand -->

            <div class="md:col-span-2">


                <a href="/" class="flex items-center">

                    <img 
                        src="{{ asset('images/logo/logo_white.png') }}"
                        alt="Stories from Amruth Gopi"
                        class="h-24 w-auto">

                </a>


                <p class="mt-5 text-gray-400 max-w-md leading-relaxed">

                    Capturing timeless stories, emotions and unforgettable
                    moments across the UK and Kerala.

                </p>


            </div>




            <!-- Navigation -->

            <div>


                <h3 class="text-lg font-medium mb-5">
                    Explore
                </h3>


                <ul class="space-y-3 text-gray-400">


                    <li>
                        <a href="/" class="hover:text-white transition">
                            Home
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('stories.index') }}" class="hover:text-white transition">
                            Stories
                        </a>
                    </li>


                    <li>
                        <a href="/gallery" class="hover:text-white transition">
                            Gallery
                        </a>
                    </li>


                    <li>
                        <a href="/contact" class="hover:text-white transition">
                            Contact
                        </a>
                    </li>


                </ul>


            </div>





            <!-- Contact -->

            <div>


                <h3 class="text-lg font-medium mb-5">
                    Contact
                </h3>


                <ul class="space-y-3 text-gray-400">


                    <li>
                        hello@storiesfromamruthgopi.com
                    </li>


                    <li>
                        +44 7502962729
                    </li>


                    <li>
                        Brighton, United Kingdom
                    </li>


                    <li>
                        Kerala, India
                    </li>


                </ul>

                <!-- Social Links -->

                <div class="mt-8">


                    <h3 class="text-lg font-medium mb-5">
                        Follow Us
                    </h3>

<div class="flex gap-5">


    <a href="https://www.instagram.com/stories_from_amruthgopi?igsh=MzZ6cGZnY3dhc2hn"
       target="_blank"
       class="text-gray-400 hover:text-white transition text-xl">

        <i class="fa-brands fa-instagram"></i>

    </a>

    <a href="https://www.facebook.com/share/1BCiaALHrZ/?mibextid=wwXIfr"
       target="_blank"
       class="text-gray-400 hover:text-white transition text-xl">

        <i class="fa-brands fa-facebook-f"></i>

    </a>
     <a href="https://wa.me/YOUR_NUMBER"
       target="_blank"
       class="text-gray-400 hover:text-white transition text-xl">

        <i class="fa-brands fa-whatsapp"></i>

    </a>


</div>


                </div>


            </div>



        </div>





        <!-- Bottom -->

        <div class="border-t border-white/10 mt-12 pt-6 flex flex-col md:flex-row justify-between gap-4 text-sm text-gray-500">


            <p>
                © {{ date('Y') }} Stories from Amruth Gopi. All rights reserved.
            </p>


            <p>
                Crafted with passion for visual stories.
            </p>


        </div>



    </div>


</footer>