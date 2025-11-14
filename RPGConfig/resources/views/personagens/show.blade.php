@extends('layouts.app')

@section('title', $personagem->nome)

@section('content')
<div class="py-6 px-4 max-w-3xl">
    <div class="bg-[#181a20] shadow sm:rounded-lg p-6">
        @if($personagem->imagem)
            <img src="{{ asset('storage/' . $personagem->imagem) }}" alt="{{ $personagem->nome }}" class="mb-4 w-32 h-32 object-cover rounded">
        @endif
        <h2 class="text-3xl font-bold text-purple-400">{{ $personagem->nome }}</h2>
        <p class="text-purple-200 mt-2">
            <strong>Classe:</strong> {{ $personagem->classe }} |
            <strong>Raça:</strong> {{ $personagem->raca }}
        </p>
        <p class="mt-4 text-gray-300">{{ $personagem->descricao }}</p>
        <p class="mt-3 text-sm text-gray-400">Campanha: {{ $personagem->campanha->titulo ?? '—' }}</p>
    </div>
    <a href="{{ route('personagens.index') }}" class="inline-block mt-6 text-purple-400 hover:underline">
        Voltar aos Personagens
    </a>
</div>
@endsection
