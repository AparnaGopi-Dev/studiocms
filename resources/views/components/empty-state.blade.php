<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-10 text-center">

    {{-- Icon --}}
    <div class="text-5xl mb-4">
        {{ $icon ?? '📂' }}
    </div>

    {{-- Title --}}
    <h2 class="text-xl font-medium text-gray-800">
        {{ $title }}
    </h2>

    {{-- Description --}}
    @if(!empty($description))
        <p class="text-gray-500 mt-3 max-w-md mx-auto leading-relaxed">
            {{ $description }}
        </p>
    @endif

    {{-- Action Button --}}
    @if(!empty($buttonText))
        <div class="mt-6">
            <a href="{{ $buttonLink ?? '#' }}"
               class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white hover:bg-gray-800 transition">
                {{ $buttonText }}
            </a>
        </div>
    @endif

</div>