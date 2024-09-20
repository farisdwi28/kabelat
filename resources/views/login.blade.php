<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 p-4 lg:p-0">
            <img src="{{ asset('img/Logo Dispusip.svg') }}" alt="Logo" class="h-16 mb-4">
            <h1 class="text-3xl font-semibold mb-8">Selamat Datang !</h1>
            <div class="w-full lg:w-2/3 bg-white shadow-lg p-8 rounded-lg">
                <form action="#" method="POST">
                    <x-custom-input label="Email" name="email" type="email"/>
                
                    <x-password-input label="Password" name="password" />
                    
                    <x-button label="Masuk" class="bg-black hover:bg-gray-800 text-white font-semibold rounded-md py-2 px-4 w-full" />
                </form>
            </div>
            <div class="mt-6 text-gray-600">
                <p>Belum Punya Akun? <a href="#" class="text-primary font-semibold hover:underline">Daftar</a></p>
            </div>
        </div>
        <div class="hidden lg:block w-1/2 h-screen">
            <img src="{{ asset('img/Login Image.svg') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
    </div>
</body>

</html>
