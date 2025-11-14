@extends('layouts.app')

@section('title', 'Novo Personagem')

@section('content')
<div class="py-6 px-4 max-w-2xl">
    <h2 class="text-3xl font-bold mb-6">Novo Personagem</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-600 text-white rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personagens.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label for="nome" class="block mb-1 font-semibold">Nome <span class="text-red-400">*</span></label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
        </div>

        <div>
            <label for="classe" class="block mb-1 font-semibold">Classe <span class="text-red-400">*</span></label>
            <input type="text" name="classe" id="classe" value="{{ old('classe') }}" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
        </div>

        <div>
            <label for="raca" class="block mb-1 font-semibold">Raça <span class="text-red-400">*</span></label>
            <input type="text" name="raca" id="raca" value="{{ old('raca') }}" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
        </div>

        <div>
            <label for="descricao" class="block mb-1 font-semibold">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4"
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500">{{ old('descricao') }}</textarea>
        </div>

        <div>
            <label for="campanha_id" class="block mb-1 font-semibold">Campanha <span class="text-red-400">*</span></label>
            <select name="campanha_id" id="campanha_id" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500">
                <option value="">Selecione a campanha</option>
                @foreach($campanhas as $campanha)
                    <option value="{{ $campanha->id }}" {{ old('campanha_id') == $campanha->id ? 'selected' : '' }}>
                        {{ $campanha->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="imagem" class="block mb-1 font-semibold">Imagem do Personagem</label>
            <input type="file" name="imagem" id="imagem"
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
        </div>

        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded">
            Criar Personagem
        </button>
        <a href="{{ route('personagens.index') }}" class="ml-4 text-purple-400 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
