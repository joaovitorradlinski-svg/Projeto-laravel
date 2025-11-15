@extends('layouts.app')

@section('title', 'Personagens')

@section('content')
<div class="py-6 px-4 max-w-4xl">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-purple-400">Personagens</h2>
        <a href="{{ route('personagens.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
            Novo Personagem
        </a>
    </div>
    <div class="bg-[#181a20] shadow sm:rounded-lg">
        <table class="w-full table-auto">
            <thead class="border-b border-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Nome</th>
                    <th class="px-4 py-3">Imagem</th>
                    <th class="px-4 py-3">Classe</th>
                    <th class="px-4 py-3">Raça</th>
                    <th class="px-4 py-3">Campanha</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($personagens as $personagem)
                <tr class="border-b border-gray-800">
                    <td class="px-4 py-2">{{ $personagem->nome }}</td>
                    <td class="px-4 py-2">
                        @if($personagem->imagem)
                            <img src="{{ asset('storage/' . $personagem->imagem) }}" alt="{{ $personagem->nome }}" class="w-12 h-12 object-cover rounded">
                        @else
                            <span class="text-gray-500">—</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $personagem->classe }}</td>
                    <td class="px-4 py-2">{{ $personagem->raca }}</td>
                    <td class="px-4 py-2 text-sm text-gray-400">{{ $personagem->campanha->titulo ?? '—' }}</td>
                    <td class="px-4 py-2 text-right">
                        <a href="{{ route('personagens.show', $personagem) }}" class="text-purple-400 hover:underline">Ver</a>
                        <a href="{{ route('personagens.edit', $personagem) }}" class="ml-3 text-purple-500 hover:underline">Editar</a>
                        <form action="{{ route('personagens.destroy', $personagem) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este personagem?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:underline bg-transparent border-none p-0 m-0 cursor-pointer">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $personagens->links() }}
    </div>
</div>
@endsection
