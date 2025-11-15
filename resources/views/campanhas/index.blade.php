@extends('layouts.app')

@section('title', 'Campanhas')

@section('content')
<div class="py-6 px-4 max-w-4xl">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-purple-400">Campanhas</h2>
        <a href="{{ route('campanhas.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
            Nova Campanha
        </a>
    </div>
    <div class="bg-[#181a20] shadow sm:rounded-lg">
        <table class="w-full table-auto">
            <thead class="border-b border-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Título</th>
                    <th class="px-4 py-3">Descrição</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($campanhas as $campanha)
                <tr class="border-b border-gray-800">
                    <td class="px-4 py-2">{{ $campanha->titulo }}</td>
                    <td class="px-4 py-2 text-gray-400">{{ Str::limit($campanha->descricao, 60) }}</td>
                    <td class="px-4 py-2 text-right">
                        <a href="{{ route('campanhas.show', $campanha) }}" class="text-purple-400 hover:underline">Ver</a>
                        <a href="{{ route('campanhas.edit', $campanha) }}" class="ml-3 text-purple-500 hover:underline">Editar</a>
                        <form action="{{ route('campanhas.destroy', $campanha) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta campanha?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:underline bg-transparent border-none p-0 m-0 cursor-pointer">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $campanhas->links() }}
    </div>
</div>
@endsection
