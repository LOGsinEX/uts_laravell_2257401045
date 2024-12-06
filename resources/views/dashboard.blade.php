<!DOCTYPE html class="h-full bg-white">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="h-full">


    <section class="relative bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/piksi.jpg') }}');">

        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>



        <div
            class="justify-center relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="bg-gray-900/75 px-7 py-12 max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    {{ $nama }}

                    <strong class="block font-extrabold text-rose-500"> {{ $nim }} - {{ $kelas }}
                    </strong>
                </h1>

                <div class="justify-center mt-8 flex flex-wrap gap-4 text-center">


                    <a href="{{ route('welcome') }}"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
