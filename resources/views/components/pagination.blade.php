{{-- <nav class="flex items-center gap-x-4 min-w-max">
    @if ($currentPage > 1)
        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center" href="?page={{ $currentPage - 1 }}">
            <span class="w-10 h-10 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-indigo-600 hover:bg-indigo-50">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11" stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>
        </a>
    @endif

    @for ($i = 1; $i <= $lastPage; $i++)
        <a class="w-10 h-10 {{ $currentPage == $i ? 'bg-indigo-600 text-white' : 'text-gray-500 border border-gray-200 bg-gray-50' }} p-2 inline-flex items-center justify-center rounded-full transition-all duration-150 hover:text-indigo-900 hover:border-indigo-600 hover:bg-indigo-50" href="?page={{ $i }}">
            {{ $i }}
        </a>
    @endfor

    @if ($currentPage < $lastPage)
        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center" href="?page={{ $currentPage + 1 }}">
            <span class="w-10 h-10 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-indigo-600 hover:bg-indigo-50">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1" stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
        </a>
    @endif
</nav> --}}<div class="flex justify-center py-2">
    <nav class="flex items-center gap-x-2 flex-wrap min-w-max">
        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center mr-1" href="javascript:;">
            <span
                class="w-10 h-10 rounded-lg transition-all duration-150 flex justify-center items-center hover:border hover:border-primary hover:bg-indigo-50">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                        stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>
        </a>
        <div class="rounded-lg flex items-center flex-wrap">
            <a class="w-10 h-10 text-gray-500 p-2 inline-flex items-center justify-center border border-gray-200 bg-gray-50 transition-all duration-150 hover:text-primary hover:border-primary hover:bg-indigo-50"
                href="javascript:;" aria-current="page">1</a>
            <a class="w-10 h-10 bg-primary text-white p-2 inline-flex items-center justify-center transition-all duration-150 hover:bg-indigo-600 hover:text-white"
                href="javascript:;">2</a>
            <a class="w-10 h-10 text-gray-500 p-2 inline-flex items-center justify-center border border-gray-200 bg-gray-50 transition-all duration-150 hover:text-primary hover:border-primary hover:bg-indigo-50"
                href="javascript:;">3</a>
            <a class="w-10 h-10 text-gray-500 p-2 inline-flex items-center justify-center border border-gray-200 bg-gray-50 transition-all duration-150 hover:text-primary hover:border-primary hover:bg-indigo-50"
                href="javascript:;">4</a>
            <a class="w-10 h-10 text-gray-500 p-2 inline-flex items-center justify-center border border-gray-200 bg-gray-50 transition-all duration-150 hover:text-primary hover:border-primary hover:bg-indigo-50"
                href="javascript:;">...</a>
            <a class="w-10 h-10 text-gray-500 p-2 inline-flex items-center justify-center border border-gray-200 bg-gray-50 transition-all duration-150 hover:text-primary hover:border-primary hover:bg-indigo-50"
                href="javascript:;">10</a>
        </div>
        <a class="text-gray-500 hover:text-gray-900 p-2 inline-flex items-center ml-1" href="javascript:;">
            <span
                class="w-10 h-10 rounded-lg transition-all duration-150 flex justify-center items-center hover:border hover:border-primary hover:bg-indigo-50">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1"
                        stroke="#4F46E5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
        </a>
    </nav>
</div>
