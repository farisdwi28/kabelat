<div class="max-w-sm rounded overflow-hidden shadow-lg flex flex-col h-50">
    <img class="w-full h-48 object-cover" src="{{ $image }}" alt="{{ $title }}">
    <div class="px-6 py-4 flex-grow">
        @if($date)
            <div class="font-bold text-sm mb-2 text-gray-500">
                {{ \Carbon\Carbon::parse($date)->format('d/m/Y') }}
            </div>
        @endif
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        @if($description)
            <p class="text-gray-700 text-base">
                {{ $description }}
            </p>
        @else
            <p class="text-gray-500 text-base">Deskripsi tidak tersedia.</p>
        @endif
    </div>
</div>