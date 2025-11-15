@extends('layouts.app')

@section('title', $personagem->nome)

@section('content')
<div class="py-6 px-4 max-w-3xl mx-auto">
    <div class="bg-[#181a20] shadow sm:rounded-lg p-6">
        <h2 class="text-3xl font-bold text-purple-400">{{ $personagem->nome }}</h2>
        <p class="mt-2 text-gray-300">{{ $personagem->classe }} - {{ $personagem->raca }}</p>
        <p class="mt-2 text-gray-300">{{ $personagem->descricao }}</p>

        @if($personagem->imagem)
            <img src="{{ asset('storage/' . $personagem->imagem) }}"
                alt="{{ $personagem->nome }}"
                class="mt-4 rounded w-48 h-48 object-cover border border-gray-800" />
        @endif
    </div>

    <a href="{{ route('personagens.index') }}" class="inline-block mt-8 text-purple-400 hover:underline">Voltar aos personagens</a>
</div>
@endsection
