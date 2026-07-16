<section class="relative min-h-screen flex items-center justify-center overflow-hidden">


   <!-- Background Image -->

<div class="absolute inset-0">

    <img 
        src="{{ asset('images/hero/hero-main.jpg') }}"
        class="w-full h-full object-cover object-top"
        alt="Photography Studio">

</div>


    <!-- Overlay -->

    <div class="absolute inset-0 bg-black/50"></div>



    <!-- Content -->

    <div class="relative z-10 text-center text-white px-6 max-w-5xl -translate-y-8">


    <!-- Small Label -->

    <p class="uppercase tracking-[0.4em] text-sm text-gray-300 mb-6 fade delay-1">

        Premium Photography Studio

    </p>



    <!-- Main Heading -->

    <h1 class="text-5xl md:text-7xl lg:text-8xl font-semibold leading-tight fade-up delay-2">

        Capture
        <br>

        <span class="italic font-light">
            Your Moments
        </span>

    </h1>



    <!-- Description -->

    <p class="mt-8 text-lg md:text-xl text-gray-200 max-w-2xl mx-auto fade delay-3">

        Creating timeless photographs that preserve
        your most meaningful stories.

    </p>

    <!-- Buttons -->

    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-5 fade-up delay-4">


        <a href="/stories" class="btn-primary">
            View Stories
        </a>

        <a href="{{ route('booking') }}" class="btn-outline">
            Book Session
        </a>
    </div>
</div>
    </div>

<!-- Scroll Indicator -->
<div class="absolute bottom-5 left-1/2 -translate-x-1/2 text-white text-center">

    <div class="text-xs tracking-[0.4em] uppercase opacity-90">
        Scroll
    </div>

    <div class="mt-4 flex flex-col items-center">

        <!-- Animated Line -->
        <div class="relative w-px h-10 overflow-hidden bg-white/40">

            <div class="absolute top-0 left-0 w-px h-5 bg-white animate-scroll-line"></div>

        </div>

        <!-- Arrow -->
        <div class="mt-2 text-sm">
            ↓
        </div>

    </div>

</div>
</section>