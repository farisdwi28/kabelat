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
<body>
<x-navbar />
<h2 class="text-2xl font-bold text-gray-800 mb-4 px-28">Pengumuman</h2> 
<br>
<x-news-item
title="Dispusip Kab. Bandung turut hadir dalam kegiatan 'Tradisi Wuku Taun Kampung Adat Cikondang'"
date="23 Jul 2024"
image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />
<br>
<x-news-item
title="Kampanye Literasi Dispusip Kabupaten Bandung - Technical Meeting Lomba Bertutur Tingkat Jawa Barat Tahun Anggaran 2024"
date="22 Jul 2024"
image="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80" />

<br>
<br>
<x-footer />
</body>
</html>