<aside class="fixed inset-y-0 left-0 w-64 bg-[#181a20] text-gray-200 flex flex-col min-h-screen border-r border-gray-900 z-20">
    <div class="h-16 flex items-center px-7 border-b border-gray-900">
        <span class="font-bold text-purple-400 text-xl">RPGConfig</span>
    </div>
    <nav class="flex-1 py-6 flex flex-col gap-1">
        <a href="{{ route('campanhas.index') }}"
           class="block px-7 py-2 rounded text-base font-medium transition {{ request()->routeIs('campanhas.*') ? 'bg-purple-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            Campanhas
        </a>
        <a href="{{ route('locais.index') }}"
           class="block px-7 py-2 rounded text-base font-medium transition {{ request()->routeIs('locais.*') ? 'bg-purple-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            Locais
        </a>
        <a href="{{ route('personagens.index') }}"
           class="block px-7 py-2 rounded text-base font-medium transition {{ request()->routeIs('personagens.*') ? 'bg-purple-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            Personagens
        </a>
        <a href="{{ route('conta.show') }}"
           class="block px-7 py-2 rounded text-base font-medium transition {{ request()->routeIs('conta.*') ? 'bg-purple-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
            Conta
        </a>
    </nav>
</aside>
