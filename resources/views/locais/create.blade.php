@extends('layouts.app')

@section('title', 'Criar Local')

@section('content')
<form action="{{ route('locais.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-8 bg-[#181a20] rounded shadow p-6">
    @csrf

    <label for="campanha_id" class="block text-gray-300 mb-2">Campanha</label>
    <select name="campanha_id" id="campanha_id" class="mb-4 w-full px-3 py-2 bg-[#23272f] border border-gray-700 text-gray-100 rounded">
        @foreach($campanhas as $campanha)
            <option value="{{ $campanha->id }}">{{ $campanha->titulo }}</option>
        @endforeach
    </select>

    <label for="nome" class="block text-gray-300 mb-2">Nome</label>
    <input type="text" name="nome" id="nome" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4"/>

    <label for="descricao" class="block text-gray-300 mb-2">Descrição</label>
    <textarea name="descricao" id="descricao" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-4"></textarea>

    <label for="imagem" class="block text-gray-300 mb-2">Imagem</label>
    <input type="file" name="imagem" id="imagem" class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 mb-2"/>
    @error('imagem')
        <div class="text-red-500 mb-2">{{ $message }}</div>
    @enderror

    <button type="submit" class="bg-purple-600 text-white py-2 px-4 rounded">Salvar</button>
</form>
@endsection
