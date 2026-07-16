@php
    $hour = now()->hour;

    if ($hour < 12) {
        $greeting = 'Good Morning';
    } elseif ($hour < 17) {
        $greeting = 'Good Afternoon';
    } else {
        $greeting = 'Good Evening';
    }
@endphp

<div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-gray-950 via-gray-900 to-black p-10 mb-8 text-white shadow-2xl">

    <!-- Decorative Background -->
    <div class="absolute -top-20 -right-20 w-72 h-72 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-1/3 w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>

    <div class="relative flex items-center justify-between">

        <!-- Left -->
        <div class="max-w-2xl">

            <p class="uppercase tracking-[0.35em] text-xs text-gray-400">
                Stories by Amruth Gopi
            </p>

            <h1 class="mt-4 text-5xl font-light leading-tight">
                {{ $greeting }},
                <span class="font-semibold">Amruth 👋</span>
            </h1>

            <p class="mt-5 text-lg text-gray-300 leading-relaxed">
                Manage your stories, galleries, bookings and client
                interactions from one elegant workspace designed for
                photographers.
            </p>

        </div>

        <!-- Right -->
        <div class="hidden lg:flex flex-col items-end gap-4">

            <div class="bg-white/10 backdrop-blur-md rounded-2xl px-6 py-4 border border-white/10">
                <p class="text-gray-400 text-xs uppercase tracking-widest">
                    Today
                </p>

                <p class="text-2xl font-semibold">
                    {{ now()->format('d M Y') }}
                </p>

                <p class="text-gray-400 mt-1">
                    {{ now()->format('l') }}
                </p>
            </div>

        </div>

    </div>
</div>