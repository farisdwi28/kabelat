<!-- resources/views/components/featured-news.blade.php -->
<a class="group relative block rounded-xl text-white overflow-hidden focus:outline-none transition-transform duration-300 hover:scale-[1.02] hover:text-primary" href="#">
    <div class="relative w-full overflow-hidden rounded-xl">
        <!-- Responsive height -->
        <div class="aspect-w-16 aspect-h-9 sm:aspect-h-8 md:aspect-h-7">
            <img class="w-full h-full object-cover" src="{{ asset($image) }}" alt="{{ $title }}">
        </div>
        
        <!-- Gradient overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
        
        <div class="absolute bottom-0 inset-x-0 z-10 ">
            <div class="p-4 sm:p-6">
                <h3 class="text-base sm:text-xl md:text-2xl font-semibold  drop-shadow-lg line-clamp-2 sm:line-clamp-3 ">
                    {{ $title }}
                </h3>
                <p class="mt-2 text-white/90 text-sm sm:text-base drop-shadow-lg">
                    {{ $date }}
                </p>
            </div>
        </div>
    </div>
</a>