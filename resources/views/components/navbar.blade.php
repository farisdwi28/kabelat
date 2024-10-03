<header class="bg-white" x-data="{ isOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global"
        x-data="{ isProgramOpen: false, isInformasiOpen: false, isTentangOpen: false }">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Kabelat</span>
                <img class="h-12 w-auto" src="{{ asset('img/Logo Kabelat.svg') }}" alt="Logo Kabelat">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button @click="isOpen = !isOpen" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-primary">Beranda</a>
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-primary"
                    @click="isProgramOpen = !isProgramOpen; isInformasiOpen = false; isTentangOpen = false">
                    Program Dispusip
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="isProgramOpen" x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                    <div class="p-4">
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Jelajah Literasi Asik
                                </a>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Bandung Bedas Preservasi Manuskrip dan Naskah Kuno
                                </a>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Wisata Literasi dan Perpustakaan anak
                                </a>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Bedas Literasi Ramadhan dan Lentera Langit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="text-sm font-semibold leading-6 text-primary">Komunitas</a>
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-primary"
                    @click="isInformasiOpen = !isInformasiOpen; isProgramOpen = false; isTentangOpen = false">
                    Informasi
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="isInformasiOpen" x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                    <div class="p-4">
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g clip-path="url(#clip0_429_11031)">
                                            <path
                                                d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                                stroke="#000000" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#000000"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M13 8L7 8" stroke="#000000" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13 12L9 12" stroke="#000000" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_429_11031">
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Berita
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Lihat Berita Terbaru Disini</p>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" viewBox="0 0 16 16"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="si-glyph si-glyph-louder-speaker" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill="#000000">
                                                <path
                                                    d="M0.031,4.571 L0.031,7.25 C0.031,8.118 0.697,9 1.521,9 L7.968,9 L7.968,3 L1.521,3 C0.697,3 0.031,3.703 0.031,4.571 Z"
                                                    class="si-glyph-fill"> </path>
                                                <path
                                                    d="M7.063,15.938 L4.025,15.938 L2.062,9.062 L5.1,9.062 L7.063,15.938 Z"
                                                    class="si-glyph-fill"> </path>
                                                <path d="M13,0 L9,2.76 L9,8.741 L13,12 L13,0 Z" class="si-glyph-fill">
                                                </path>
                                                <path
                                                    d="M13,3.989 L13,8 C14.086,8 14.969,7.103 14.969,5.994 C14.969,4.887 14.086,3.989 13,3.989 L13,3.989 Z"
                                                    class="si-glyph-fill"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="/Pengumuman" class="block font-semibold text-primary">
                                    Pengumuman
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Lihat Pengumuman Terbaru Disini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="text-sm font-semibold leading-6 text-primary">Galeri Kegiatan</a>
            <a href="#" class="text-sm font-semibold leading-6 text-primary">Profil</a>
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-primary"
                    @click="isTentangOpen = !isTentangOpen; isProgramOpen = false; isInformasiOpen = false">
                    Tentang
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="isTentangOpen" x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                    <div class="p-4">
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" viewBox="0 0 512 512"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>about</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="about-white" fill="#000000"
                                                transform="translate(42.666667, 42.666667)">
                                                <path
                                                    d="M213.333333,3.55271368e-14 C95.51296,3.55271368e-14 3.55271368e-14,95.51168 3.55271368e-14,213.333333 C3.55271368e-14,331.153707 95.51296,426.666667 213.333333,426.666667 C331.154987,426.666667 426.666667,331.153707 426.666667,213.333333 C426.666667,95.51168 331.154987,3.55271368e-14 213.333333,3.55271368e-14 Z M213.333333,384 C119.227947,384 42.6666667,307.43872 42.6666667,213.333333 C42.6666667,119.227947 119.227947,42.6666667 213.333333,42.6666667 C307.44,42.6666667 384,119.227947 384,213.333333 C384,307.43872 307.44,384 213.333333,384 Z M240.04672,128 C240.04672,143.46752 228.785067,154.666667 213.55008,154.666667 C197.698773,154.666667 186.713387,143.46752 186.713387,127.704107 C186.713387,112.5536 197.99616,101.333333 213.55008,101.333333 C228.785067,101.333333 240.04672,112.5536 240.04672,128 Z M192.04672,192 L234.713387,192 L234.713387,320 L192.04672,320 L192.04672,192 Z"
                                                    id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="/TentangKami" class="block font-semibold text-primary">
                                    Tentang Dispusip
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Cari Info Lengkap Dispusip Disini</p>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" viewBox="0 0 16 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M1 5V1H7V5L4.5 7.5L8.5 11.5L11 9H15V15H11C5.47715 15 1 10.5228 1 5Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="/HubungiKami" class="block font-semibold text-primary">
                                    Hubungi Kami
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Lihat Contact Kami Disini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login"><x-button label="Masuk" class="bg-primary text-white px-6 py-2" /></a>
        </div>
    </nav>
    <div x-data="{ isProgramOpen: false, isInformasiOpen: false, isTentangOpen: false }" class="lg:hidden" role="dialog" aria-modal="true">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-2 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-2 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="lg:hidden" role="dialog" aria-modal="true">
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Kabelat</span>
                        <img class="h-12 w-auto" src="{{ asset('img/Logo Kabelat.svg') }}" alt="Logo Kabelat">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="/"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-primary hover:bg-gray-50">Beranda</a>
                            <div class="-mx-3">
                                <button type="button" @click="isProgramOpen = !isProgramOpen"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-primary hover:bg-gray-50"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Program Dispusip
                                    <svg :class="{ 'rotate-180': isProgramOpen }"
                                        class="h-5 w-5 flex-none transition-transform" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="isProgramOpen" class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Jelajah
                                        Literasi Asik</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Bandung
                                        Bedas Preservasi Manuskrip dan Naskah Kuno</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Wisata
                                        Literasi dan Perpustakaan anak</a>
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Bedas
                                        Literasi Ramadhan dan Lentera Langit</a>
                                </div>
                            </div>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-primary hover:bg-gray-50">Komunitas</a>
                            <div class="-mx-3">
                                <button type="button" @click="isInformasiOpen = !isInformasiOpen"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-primary hover:bg-gray-50"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Informasi
                                    <svg :class="{ 'rotate-180': isInformasiOpen }"
                                        class="h-5 w-5 flex-none transition-transform" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="isInformasiOpen" class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="#"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Berita</a>
                                    <a href="/Pengumuman"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Pengumuman</a>
                                </div>
                            </div>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-primary hover:bg-gray-50">Galeri
                                Kegiatan</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-primary hover:bg-gray-50">Profil</a>
                            <div class="-mx-3">
                                <button type="button" @click="isTentangOpen = !isTentangOpen"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-primary hover:bg-gray-50"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                    Tentang
                                    <svg :class="{ 'rotate-180': isTentangOpen }"
                                        class="h-5 w-5 flex-none transition-transform" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="isTentangOpen" class="mt-2 space-y-2" id="disclosure-1">
                                    <a href="/TentangKami"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Tentang
                                        Dispusip</a>
                                    <a href="/HubungiKami"
                                        class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Hubungi
                                        Kami</a>
                                </div>
                            </div>
                        </div>
                        <div class="py-6">
                            <a href="/login"><x-button label="Masuk" class="-mx-3 bg-primary text-white px-6 py-2" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
