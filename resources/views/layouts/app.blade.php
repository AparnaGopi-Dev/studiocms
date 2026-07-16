<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioCMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex">

        {{-- SIDEBAR --}}
        <aside class="w-64 bg-black text-white h-screen fixed">
            <div class="p-6 text-xl font-light border-b border-gray-800">
                StudioCMS
            </div>

            <nav class="mt-6">
                <a href="#" class="block px-6 py-3 hover:bg-gray-900 transition">
                    Dashboard
                </a>
                <a href="#" class="block px-6 py-3 hover:bg-gray-900 transition">
                    Categories
                </a>
                <a href="#" class="block px-6 py-3 hover:bg-gray-900 transition">
                    Stories
                </a>
                <a href="#" class="block px-6 py-3 hover:bg-gray-900 transition">
                    Photos
                </a>
            </nav>
        </aside>

        {{-- MAIN AREA --}}
        <div class="ml-64 flex-1">

            {{-- TOPBAR --}}
            <header class="h-16 bg-white border-b flex items-center justify-between px-6">
                <h1 class="font-light tracking-wide">StudioCMS Dashboard</h1>

                <div class="text-sm text-gray-600">
                    Your Name
                </div>
            </header>

            {{-- PAGE CONTENT --}}
            <main class="p-6">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>