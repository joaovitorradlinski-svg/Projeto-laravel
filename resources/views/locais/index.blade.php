@extends('layouts.app')

@section('title', 'Locais')

@section('content')
<div class="py-6 px-4 max-w-4xl">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-purple-400">Locais</h2>
        <a href="{{ route('locais.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
            Novo Local
        </a>
    </div>
    <div class="bg-[#181a20] shadow sm:rounded-lg">
        <table class="w-full table-auto">
            <thead class="border-b border-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Nome</th>
                    <th class="px-4 py-3">Imagem</th>
                    <th class="px-4 py-3">Descrição</th>
                    <th class="px-4 py-3">Campanha</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($locais as $local)
                <tr class="border-b border-gray-800">
                    <td class="px-4 py-2">{{ $local->nome }}</td>
                    <td class="px-4 py-2">
                        @if($local->imagem)
                            <img src="{{ asset('storage/' . $local->imagem) }}" alt="{{ $local->nome }}" class="w-12 h-12 object-cover rounded">
                        @else
                            <span class="text-gray-500">—</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 text-gray-400">{{ Str::limit($local->descricao, 24) }}</td>
                    <td class="px-4 py-2 text-sm text-gray-400">{{ $local->campanha->titulo ?? '—' }}</td>
                    <td class="px-4 py-2 text-right">
                        <a href="{{ route('locais.show', $local) }}" class="text-purple-400 hover:underline">Ver</a>
                        <a href="{{ route('locais.edit', $local) }}" class="ml-3 text-purple-500 hover:underline">Editar</a>
                        <form action="{{ route('locais.destroy', $local) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este local?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:underline bg-transparent border-none p-0 m-0 cursor-pointer">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $locais->links() }}
    </div>
</div>
@endsection
