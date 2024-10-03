<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="../path/to/src/pagedone.css" rel="stylesheet" />
</head>

@php
    $slides = [
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Jelajah Literasi Anak',
        ],
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Bandung Bedas Preservasi Manuskrip dan Naskah Kuno',
        ],
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Wisata Literasi dan Perpustakaan anak',
        ],
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Bedas Literasi Ramadhan dan Lentera Langit',
        ],
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Fifth Slide',
        ],
        [
            'image' => asset('img/Login Image.svg'),
            'title' => 'Sixth Slide',
        ],
    ];

    $slides2 = [
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'Bunda Literasi',
        ],
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'GPMB',
        ],
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'Forum Naskah Kuno',
        ],
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'Forum Pendongeng',
        ],
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'Fifth Slide',
        ],
        [
            'image' => asset('img/Berita1.png'),
            'title' => 'Sixth Slide',
        ],
    ];
@endphp

<body class="container mx-auto px-4">
    <x-navbar />
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center flex gap-x-1">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                    Lomba Mendongeng Dan Bertutur Cerita Daerah</h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Meriahkan Sasakala Dongeng Bandung Bersama
                    Ki Bedas!. Dinas Perpustakaan dan Kearsipan Kabupaten Bandung dengan bangga menghadirkan Lomba
                    Mendongeng dan Bertutur Cerita Daerah dalam rangka program Sasakala Dongeng Bandung Bersama Ki Bedas
                </p>
            </div>
            <div class="relative ms-4">
                <img class="w-full rounded-md" src="{{ asset('img/Foto Awal.png') }}" alt="Hero Image">
            </div>
        </div>
    </div>

    <x-carousel-component :slides="$slides" heading="Program Dispusip" />

    <x-news-section>
        <x-featured-news title="Peningkatan Kapasitas dan Pelepasan Purna" date="19 Jul 2024"
            image="img/Foto Awal.png" />

        <div class="space-y-6">
            <x-news-item title="Lomba Mendongeng dan Bertutur Cerita Daerah" date="22 Jul 2024"
                image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />

            <x-news-item
                title="Dispusip Kab. Bandung turut hadir dalam kegiatan 'Tradisi Wuku Taun Kampung Adat Cikondang'"
                date="23 Jul 2024"
                image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />

            <x-news-item
                title="Kampanye Literasi Dispusip Kabupaten Bandung - Technical Meeting Lomba Bertutur Tingkat Jawa Barat Tahun Anggaran 2024"
                date="22 Jul 2024"
                image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />

            <x-news-item
                title="Penyerahan Arsip Vital Kecamatan Katapang ke Dinas Perpustakaan dan Arsip Kabupaten Bandung"
                date="22 Jul 2024"
                image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />
        </div>
    </x-news-section>

    <x-carousel-component :slides="$slides2" heading="Forum Komunitas" />
    <script src="./node_modules/preline/dist/preline.js"></script>
    <x-footer />

</body>

</html>
