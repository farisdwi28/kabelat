<div class="flex justify-center items-center min-h-screen">
    <a class="group block rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 focus:outline-none" href="#">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 px-28">
            <div class="shrink-0 relative rounded-xl overflow-hidden w-full sm:w-48 h-48 sm:h-32">
                <img class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
                     src="{{ asset($image) }}" alt="{{ $title }}">
            </div>
            <div class="flex-1">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800 group-hover:text-primary transition-colors line-clamp-2 sm:line-clamp-3 md:line-clamp-2 lg:line-clamp-3">
                    {{ $title }}
                </h3>
                <p class="mt-2 text-gray-600 text-sm">
                    {{ $description }}
                </p>
                <p class="mt-2 text-gray-600 text-sm">
                    {{ $date }}
                </p>
                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium text-primary decoration-2 group-hover:underline">
                    Read more
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </p>
            </div>
        </div>
    </a>
</div>
