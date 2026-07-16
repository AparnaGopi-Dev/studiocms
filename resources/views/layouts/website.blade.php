<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Studio CMS</title>

    {{-- Premium Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Website CSS --}}
    @vite(['resources/css/website.css'])

</head>


<body>

    @include('partials.website-navbar')


    <main>

        @yield('content')

    </main>


    @include('partials.website-footer')
    <script>

    document.addEventListener("DOMContentLoaded", function(){


        const elements = document.querySelectorAll('.reveal');


        const observer = new IntersectionObserver((entries)=>{


            entries.forEach(entry => {


                if(entry.isIntersecting){

                    entry.target.classList.add('active');

                }


            });


        },
        {
            threshold: 0.15
        });



        elements.forEach(element => {

            observer.observe(element);

        });


    });

    </script>
    <!-- WhatsApp Floating Button -->

<a href="https://wa.me/+447502962729"
   target="_blank"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-green-500 text-white flex items-center justify-center shadow-xl hover:scale-110 transition duration-300">


    <i class="fa-brands fa-whatsapp text-3xl"></i>


</a>

</body>

</html>