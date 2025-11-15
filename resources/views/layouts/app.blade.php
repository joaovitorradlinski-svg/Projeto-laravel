<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RPGConfig')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#0e1218] text-gray-200 font-sans">


    @include('components.sidebar')


    <div class="ml-64 min-h-screen flex flex-col">

        <header class="bg-[#1f2532] h-14 flex items-center justify-between px-8 border-b border-gray-700">
            <h1 class="text-lg font-semibold text-gray-100">@yield('title', 'Painel')</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-sm text-gray-400 hover:text-white transition bg-transparent border-0 cursor-pointer">
                    Sair
                </button>
            </form>
        </header>


        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>

</html>
