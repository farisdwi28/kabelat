<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="../path/to/src/pagedone.css" rel="stylesheet" />
</head>
<body>
    <x-navbar />
    <img src="{{ asset('img/TentangKami.png') }}" alt="Tentang Kami" class="w-full h-full">
    <div class="max-w-4xl mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-md p-8">
            <p class="text-gray-700 text-lg sm:text-xl md:text-2xl lg:text-4xl leading-relaxed">
                Halaman ini masih dalam tahap pengembangan, dan kami sedang bekerja keras untuk menghadirkan informasi yang lebih lengkap dan layanan yang lebih baik. Terima kasih atas pengertiannya, dan kami mengundang Anda untuk terus kembali mengunjungi halaman ini untuk mendapatkan pembaruan terbaru. Mari bersama-sama menjaga dan mengembangkan kekayaan literasi serta warisan sejarah kita.
            </p>
        </div>
    </div>
    <x-footer />
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
