<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun</title>
     @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 p-4 lg:p-0">
            <img src="{{ asset('img/Logo Dispusip.svg') }}" alt="Logo" class="h-16 mb-8">

            
            <!-- Steps -->
            <div class="flex space-x-4 mb-0">
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-gray-300  rounded-full"></div>
                    <p class="ml-2 text-sm">Konfirmasi Data Anda</p>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 bg-black rounded-full"></div>
                    <p class="ml-2 text-sm">Buat Akun Anda</p>
                </div>
            </div>
            
            <!-- Form -->
            <form action="#" method="POST" class="bg-white shadow p-6 rounded-lg w-full lg:w-2/3">
                <x-custom-input label="Username" name="Username" type="text"/>
                <x-custom-input label="Email" name="email" type="email"/>
                <x-custom-input label=" No Telepon" name="telepon" type="number"/>
                <x-password-input label="Password" name="password" />
                <x-password-input label="Konfirmasi Password" name="Konfirmasi password" />
                <button type="submit"
                    class="w-full bg-black hover:bg-gray-800 text-white font-semibold rounded-md py-2">Daftar Akun</button>
            </form>

            <div class="mt-6 text-gray-600">
                <p>Sudah Punya Akun? <a href="#" class="text-primary font-semibold hover:underline">Masuk</a></p>
            </div>
        </div>
        <div class="hidden lg:block w-1/2 h-screen">
            <img src="{{ asset('img/Login Image.svg') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
    </div>
</body>

</html>
