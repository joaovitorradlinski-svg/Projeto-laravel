<header class="flex items-center justify-between bg-gray-800 text-gray-200 p-4 shadow">
    <h1 class="text-xl font-semibold">@yield('title')</h1>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="hover:text-pink-500">Sair da conta</button>
        </form>
    </div>
</header>
