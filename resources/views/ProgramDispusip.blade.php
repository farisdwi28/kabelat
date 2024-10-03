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
    <x-program-dispusip
    title="Jelajah Literasi Asik"
    description1="Indonesia tertinggal dalam hal budaya literasi. Data UNESCO tahun 2017 menunjukkan bahwa minat baca masyarakat Indonesia sangat rendah, hanya 0,001%."
    subtitle="Dinisiasi oleh Sani Kurnia"
    description2="Kurangnya minat baca ini memiliki dampak yang signifikan terhadap perkembangan intelektual dan kemajuan sosial masyarakat."
    description3="Berdasarkan kondisi tersebut, Dinas Arsip dan Perpustakaan Kabupaten Bandung mengembangkan inovasi yang diberi nama Jelita, yang merupakan singkatan dari Jelajah Literasi Asik. Inovasi ini bertujuan untuk meningkatkan minat baca di kalangan masyarakat, terutama di daerah-daerah yang masih memiliki tingkat literasi yang rendah. Dengan pendekatan yang menarik dan interaktif, program Jelita dirancang untuk membawa masyarakat, terutama anak-anak dan remaja, ke dalam dunia literasi melalui berbagai kegiatan yang menyenangkan dan edukatif. Melalui kegiatan ini, Dinas Arsip dan Perpustakaan berharap dapat menciptakan lingkungan yang mendukung kebiasaan membaca dan menulis, serta mengedukasi masyarakat tentang pentingnya literasi dalam kehidupan sehari-hari. Selain itu, program Jelita juga berfungsi sebagai sarana untuk menjalin kerjasama dengan berbagai pihak, seperti sekolah, komunitas, dan lembaga lainnya, dalam upaya bersama meningkatkan kesadaran akan pentingnya literasi dan akses terhadap informasi yang berkualitas."
    image="img/program.png"
/>
<br>
<x-footer />
</body>
</html>