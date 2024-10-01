<header class="bg-white" x-data="{ isOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global"
        x-data="{ isProgramOpen: false, isInformasiOpen: false, isTentangOpen: false }">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
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
            <a href="#" class="text-sm font-semibold leading-6 text-primary">Beranda</a>
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
                            <div
                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Automations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
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
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Automations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
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
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-primary">
                                    Automations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <x-button label="Masuk" class="bg-primary text-white px-6 py-2" />
        </div>
    </nav>
    <div x-data="{isProgramOpen: false, isInformasiOpen: false, isTentangOpen: false }" class="lg:hidden" role="dialog" aria-modal="true">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-2 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-2 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Kabelat</span>
                    <img class="h-12 w-auto" src="{{ asset('img/Logo Kabelat.svg') }}" alt="Logo Kabelat">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = false">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
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
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Analytics</a>
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
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Analytics</a>
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
                                <a href="#"
                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-primary hover:bg-gray-50">Analytics</a>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <x-button label="Masuk" class="-mx-3 bg-primary text-white px-6 py-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
