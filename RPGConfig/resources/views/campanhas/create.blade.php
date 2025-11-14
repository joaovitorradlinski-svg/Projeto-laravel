@extends('layouts.app')

@section('title', isset($campanha) ? 'Editar Campanha' : 'Nova Campanha')

@section('content')
<div class="py-6 px-4 max-w-2xl">
    <h2 class="text-3xl font-bold mb-6">
        {{ isset($campanha) ? 'Editar Campanha' : 'Nova Campanha' }}
    </h2>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-600 text-white rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($campanha) ? route('campanhas.update', $campanha) : route('campanhas.store') }}"
        method="POST" class="space-y-6">
        @csrf
        @if(isset($campanha))
            @method('PUT')
        @endif

        <div>
            <label for="titulo" class="block mb-1 font-semibold">Título <span class="text-red-400">*</span></label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $campanha->titulo ?? '') }}" required
                class="w-full px-3 py-2 rounded bg-[#23272f] text-gray-100 border border-gray-700 focus:outline-none focus:border-purple-500" />
            @error('titulo')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label for="descricao" class="block mb-1 font-semibold">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4"
                class="w-full px-3 py-2 rounded bg-[#23272f] border border-gray-700 text-gray-100 focus:outline-none focus:border-purple-500">{{ old('descricao', $campanha->descricao ?? '') }}</textarea>
            @error('descricao')<p class="text-red-500 mt-1">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded">
            {{ isset($campanha) ? 'Salvar Alterações' : 'Criar Campanha' }}
        </button>
        <a href="{{ route('campanhas.index') }}" class="ml-4 text-purple-400 hover:underline">Cancelar</a>
    </form>
</div>
@endsection
