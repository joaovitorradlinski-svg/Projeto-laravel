@extends('layouts.app')

@section('title', isset($local) ? 'Editar Local' : 'Novo Local')

@section('content')
<div class="py-6 px-4 max-w-2xl">
    <h2 class="text-3xl font-bold mb-6">{{ isset($local) ? 'Editar Local' : 'Novo Local' }}</h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-600 text-white rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($local) ? route('locais.update', $local) : route('locais.store') }}"
          method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @if(isset($local))
            @method('PUT')
        @endif

        <div>
            <label for="nome" class="block mb-1 font-semibold">Nome <span class="text-red-400">*</span></label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $local->nome ?? '') }}" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
            @error('nome')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="descricao" class="block mb-1 font-semibold">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4"
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500">{{ old('descricao', $local->descricao ?? '') }}</textarea>
            @error('descricao')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="campanha_id" class="block mb-1 font-semibold">Campanha <span class="text-red-400">*</span></label>
            <select name="campanha_id" id="campanha_id" required
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500">
                <option value="">Selecione a campanha</option>
                @foreach($campanhas as $campanha)
                    <option value="{{ $campanha->id }}" {{ old('campanha_id', $local->campanha_id ?? '') == $campanha->id ? 'selected' : '' }}>
                        {{ $campanha->titulo }}
                    </option>
                @endforeach
            </select>
            @error('campanha_id')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="imagem" class="block mb-1 font-semibold">Imagem do Local</label>
            <input type="file" name="imagem" id="imagem"
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500" />
            @error('imagem')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
            @if(isset($local) && $local->imagem)
                <img src="{{ asset('storage/'.$local->imagem) }}" alt="{{ $local->nome }}" class="mt-2 w-20 h-20 object-cover rounded border border-gray-800">
            @endif
        </div>

        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded">
            {{ isset($local) ? 'Salvar Alterações' : 'Criar Local' }}
        </button>
        <a href="{{ route('locais.index') }}" class="ml-4 text-purple-400 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
