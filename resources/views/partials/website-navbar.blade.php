      @php
        $isHome = request()->is('/');
    @endphp
    <nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 transition duration-500
     {{ $isHome ? 'bg-transparent' : 'bg-white/90 backdrop-blur-md shadow-lg' }}">


        <div class="max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">


        <!-- Logo -->

        <a href="/" class="flex items-center">

            <img
                id="navbarLogo"
                src="{{ asset($isHome ? 'images/logo/logo_white.png' : 'images/logo/logo_black.png') }}"
                alt="StudioCMS Logo"
                class="h-24 w-auto">

        </a>



        <!-- Desktop Menu -->

        <div id="desktopMenu"
             class="hidden md:flex items-center gap-10 {{ $isHome ? 'text-white' : 'text-gray-900' }}">


            <a href="/" 
               class="transition duration-300 hover:opacity-70">
                Home
            </a>


            <a href="/stories"
               class="transition duration-300 hover:opacity-70">
                Stories
            </a>


            <a href="/gallery"
               class="transition duration-300 hover:opacity-70">
                Gallery
            </a>
            <a href="/about"
            class="transition duration-300 hover:opacity-70">
                About
            </a>

            <a href="/contact"
               class="transition duration-300 hover:opacity-70">
                Contact
            </a>


        </div>



        <!-- Mobile Menu Button -->

        <button 
            class="md:hidden {{ $isHome ? 'text-white' : 'text-gray-900' }} text-3xl"
            onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">

            ☰

        </button>


    </div>



    <!-- Mobile Menu -->

    <div id="mobileMenu"
         class="hidden md:hidden bg-black/80 backdrop-blur-md">


        <div class="flex flex-col px-6 py-6 gap-5 text-white">


            <a href="/">
                Home
            </a>


            <a href="/stories">
                Stories
            </a>


            <a href="/gallery">
                Gallery
            </a>


            <a href="/contact">
                Contact
            </a>


        </div>


    </div>


</nav>



@if($isHome)

<script>

window.addEventListener('scroll', function () {


    const navbar = document.getElementById('navbar');
    const menu = document.getElementById('desktopMenu');
    const logo = document.getElementById('navbarLogo');


    if (window.scrollY > 50) {


        navbar.classList.remove('bg-transparent');


        navbar.classList.add(
            'bg-white/90',
            'backdrop-blur-md',
            'shadow-lg'
        );


        menu.classList.remove('text-white');
        menu.classList.add('text-gray-900');


        logo.src = "{{ asset('images/logo/logo_black.png') }}";


    } else {


        navbar.classList.remove(
            'bg-white/90',
            'backdrop-blur-md',
            'shadow-lg'
        );


        navbar.classList.add('bg-transparent');


        menu.classList.remove('text-gray-900');
        menu.classList.add('text-white');


        logo.src = "{{ asset('images/logo/logo_white.png') }}";


    }


});

</script>

@endif