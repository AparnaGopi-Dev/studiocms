<div
    class="group bg-white rounded-2xl border border-gray-100 p-6
           shadow-sm hover:shadow-xl hover:-translate-y-1
           transition-all duration-300">

    <div class="flex items-start justify-between">

        <div>

            <p class="text-sm font-medium tracking-wide text-gray-500 uppercase">
                {{ $title }}
            </p>

            <h2 class="mt-3 text-4xl font-light text-gray-900">
                {{ $value }}
            </h2>

            <p class="mt-2 text-sm text-green-600">
                Live Data
            </p>

        </div>

        <div
            class="w-14 h-14 rounded-2xl
                   bg-gradient-to-br
                   from-gray-900 to-black
                   text-white
                   flex items-center justify-center
                   text-2xl
                   shadow-lg
                   group-hover:scale-110
                   transition">

       {{ $slot }}

        </div>

    </div>

</div>