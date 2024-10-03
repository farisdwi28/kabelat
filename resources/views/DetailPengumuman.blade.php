<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pengumuman</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="../path/to/src/pagedone.css" rel="stylesheet" />
</head>

<body>
    <x-navbar />
    <x-detail-pengumuman title="Penutupan Layanan Dispusip Selama Hari Raya dan Cuti Bersama"
        author="Achmad Naufal Nazheef" date="29 Juni 2024" img="{{ asset('img/Foto Awal.png') }}"
        isi="Sehubungan  dengan Hari Raya Idul Adha dan Cuti Bersama. Hari ini dan Besok Layanan  Perpustakaaan Tutup Sementara. Layanan perpustakaan akan dibuka kembali pada hari Rabu, 19 Juni 2024. Terima kasih." />
    <x-footer />
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
