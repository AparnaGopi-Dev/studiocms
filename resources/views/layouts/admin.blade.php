<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioCMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="flex min-h-screen">

    @include('partials.admin-sidebar')

    <div class="flex-1">

        @include('partials.admin-navbar')

        <main class="p-6">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>