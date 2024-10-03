    <div class="relative bg-cover bg-center w-full h-60 sm:h-72 md:h-80 lg:h-96 flex items-center px-10"
        @if ($image) style="background-image: url('{{ asset($image) }}');" @endif>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative mx-auto z-10 text-left mt-24 sm:mt-32 md:mt-44">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white">{{ $title }}</h1>
            @if ($subtitle)
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-200 mt-2">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
    <div class="container mx-auto px-4">
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Jelajah Literasi</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                {{ $description1 }}
            </p>
            @if ($description2)
                <p class="text-gray-700 leading-relaxed mb-4">
                    {{ $description2 }}
                </p>
            @endif
            @if ($description3)
                <p class="text-gray-700 leading-relaxed">
                    {{ $description3 }}
                </p>
            @endif
        </div>
    </div>
