@extends('layouts.website')

@section('content')

<section class="py-32 bg-[#faf9f7] px-6">

    <div class="max-w-5xl mx-auto">


        <!-- Heading -->

        <div class="text-center mb-16">

            <p class="uppercase tracking-[0.4em] text-xs text-gray-500 mb-4">
                Booking
            </p>

            <h1 class="text-5xl md:text-6xl font-light tracking-tight">
                Book A Session
            </h1>

            <p class="mt-6 text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Tell us about your special moment.
                We would love to create timeless memories with you.
            </p>

        </div>



        <!-- Form -->

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-12">


            <form class="space-y-6">


                <!-- Name -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Name
                    </label>

                    <input 
                        type="text"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                        placeholder="Your name"
                    >

                </div>



                <!-- Email -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Email
                    </label>

                    <input 
                        type="email"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                        placeholder="Your email"
                    >

                </div>



                <!-- Phone -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Phone
                    </label>

                    <input 
                        type="text"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                        placeholder="Your phone number"
                    >

                </div>



                <!-- Session Type -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Session Type
                    </label>

                    <select
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black">

                        <option>Select session</option>
                        <option>Wedding Stories</option>
                        <option>Maternity</option>
                        <option>Newborn</option>
                        <option>Baby Shower</option>
                        <option>Children</option>
                        <option>Family</option>
                        <option>Couple Shoot</option>
                        <option>Holy Communion</option>
                        <option>Others</option>

                    </select>

                </div>



                <!-- Date -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Preferred Date
                    </label>

                    <input 
                        type="date"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                    >

                </div>



                <!-- Message -->

                <div>

                    <label class="block text-sm text-gray-600 mb-2">
                        Message
                    </label>

                    <textarea
                        rows="5"
                        class="w-full rounded-xl border-gray-200 px-5 py-4 focus:ring-0 focus:border-black"
                        placeholder="Tell us about your event..."
                    ></textarea>

                </div>



                <!-- Submit -->

                <div class="text-center pt-6">

                    <button
                        type="submit"
                        class="px-12 py-4 rounded-full bg-black text-white text-sm tracking-wide hover:bg-gray-800 transition">

                        Send Enquiry →

                    </button>

                </div>



            </form>


        </div>


    </div>


</section>


@endsection