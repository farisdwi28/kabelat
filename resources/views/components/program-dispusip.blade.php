<div class="container mx-auto px-4">
    <div class="relative bg-cover h-80 flex items-center px-10" @if($image) style="background-image: url('{{ asset($image) }}');" @endif>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-center mt-44">
            <h1 class="text-4xl font-bold text-white">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-lg text-gray-200 mt-2">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
    <div class="mt-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Jelajah Literasi</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            {{ $description1 }}
        </p>
        @if($description2)
            <p class="text-gray-700 leading-relaxed mb-4">
                {{ $description2 }}
            </p>
        @endif
        @if($description3)
            <p class="text-gray-700 leading-relaxed">
                {{ $description3 }}
            </p>
        @endif
    </div>
</div>
