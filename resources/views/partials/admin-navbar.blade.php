<header class="border-b bg-white">

    <div class="flex justify-between items-center p-4">

        <h2 class="font-semibold text-xl">
            Dashboard
        </h2>

        <div>

            {{ Auth::user()->name }}

        </div>

    </div>

</header>