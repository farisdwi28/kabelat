<!-- resources/views/components/carousel-component.blade.php -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "slidesQty": {
      "xs": 1,
      "lg": 4
    },
    "isDraggable": true
  }' class="relative">
    <h1 class="text-center my-10 text-2xl font-medium">{{ $heading }}</h1>
    <div class="hs-carousel w-full overflow-hidden bg-white rounded-lg my-10">
      <div class="relative min-h-72 -mx-1">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 cursor-grab transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
          
          @foreach($slides as $slide)
          <div class="hs-carousel-slide px-1">
            <div class="bg-white border rounded-lg shadow-md overflow-hidden h-full flex flex-col">
              <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="w-full h-48 object-cover">
              <div class="p-4 flex-1 flex flex-col justify-between bg-card1">
                <h2 class="text-lg text-center">{{ $slide['title'] }}</h2>
                @if(isset($slide['description']) && !empty($slide['description']))
                    <p class="text-gray-600 text-center">{{ $slide['description'] }}</p>
                @endif
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>

    <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
      <span class="text-2xl" aria-hidden="true">
        <svg class="shrink-0 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m15 18-6-6 6-6"></path>
        </svg>
      </span>
      <span class="sr-only">Previous</span>
    </button>
    
    <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
      <span class="sr-only">Next</span>
      <span class="text-2xl" aria-hidden="true">
        <svg class="shrink-0 size-10 text-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
      </span>
    </button>

</div>
