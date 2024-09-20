<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 p-4 lg:p-0">
            <img src="{{ asset('img/Logo Dispusip.svg') }}" alt="Logo" class="h-16 mb-4">
            <h1 class="text-3xl font-semibold mb-8">Daftar Akun</h1>
            <div class="flex justify-center mb-6 space-x-6">
                <!-- Indikator Masukkan Nomor KTP -->
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-black rounded-full"></div>
                    <p class="ml-2 text-sm">Masukkan Nomor KTP Anda</p>
                </div>
                <!-- Indikator Konfirmasi Data -->
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-gray-300 rounded-full"></div>
                    <p class="ml-2 text-sm">Konfirmasi Data Anda</p>
                </div>
            </div>
            <div class="w-full lg:w-2/3 bg-white shadow-lg p-8 rounded-lg">
                <form action="#" method="POST">
                    <x-custom-input label="No-NIK" name="No-NIK" type="number" />
                    <x-button label="Berikutnya"
                        class="bg-black hover:bg-gray-800 text-white font-semibold rounded-md py-2 px-4 w-full" />
                </form>
            </div>
            <div class="mt-6 text-gray-600">
                <p>Sudah Punya Akun? <a href="#" class="text-primary font-semibold hover:underline">Masuk</a></p>
            </div>
        </div>

        <div class="hidden lg:block w-1/2 h-screen">
            <img src="{{ asset('img/Login Image.svg') }}" alt="Bookshelf Image" class="object-cover w-full h-full">
        </div>
    </div>
</body>

</html>
