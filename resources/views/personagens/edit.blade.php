@extends('layouts.app')

@section('title', 'Editar Personagem')

@section('content')
<form action="{{ route('personagens.update', $personagem->id) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-8 bg-[#181a20] rounded shadow p-6">
    @csrf
    @method('PUT')

    <label for="campanha_id" class="block text-gray-300 mb-2">Campanha</label>
    <select name="campanha_id" id="campanha_id" class="mb-4 w-full px-3 py-2 bg-[#23272f] border border-gray-700 text-gray-100 rounded">
        @foreach($campanhas as $campanha)
            <option value="{{ $campanha->id }}" @if($personagem->campanha_id == $campanha->id) selected @endif>{{ $campanha->titulo }}</option>
        @endforeach
    </select>

    <label for="nome" class="block text-gray-300 mb-2">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $personagem->nome }}" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4"/>

    <label for="classe" class="block text-gray-300 mb-2">Classe</label>
    <input type="text" name="classe" id="classe" value="{{ $personagem->classe }}" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4"/>

    <label for="raca" class="block text-gray-300 mb-2">Raça</label>
    <input type="text" name="raca" id="raca" value="{{ $personagem->raca }}" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4"/>

    <label for="descricao" class="block text-gray-300 mb-2">Descrição</label>
    <textarea name="descricao" id="descricao" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4">{{ $personagem->descricao }}</textarea>

    <label for="imagem" class="block text-gray-300 mb-2">Imagem</label>
    <input type="file" name="imagem" id="imagem" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-2"/>
    @error('imagem')
        <div class="text-red-500 mb-2">{{ $message }}</div>
    @enderror
    @if($personagem->imagem)
        <img src="{{ asset('storage/' . $personagem->imagem) }}" alt="{{ $personagem->nome }}" class="mb-4 rounded w-32 h-32 object-cover border border-gray-800"/>
    @endif

    <button type="submit" class="bg-purple-600 text-white py-2 px-4 rounded">Salvar</button>
</form>
@endsection
