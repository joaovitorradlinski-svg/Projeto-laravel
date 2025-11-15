@extends('layouts.app')

@section('title', $campanha->titulo)

@section('content')
<div class="py-6 px-4 max-w-3xl">
    <div class="bg-[#181a20] shadow sm:rounded-lg p-6">
        <h2 class="text-3xl font-bold text-purple-400">{{ $campanha->titulo }}</h2>
        <p class="mt-2 text-gray-300">{{ $campanha->descricao }}</p>
    </div>

    <div class="mt-8">
        <h3 class="text-2xl font-semibold text-purple-300 mb-3">Locais desta Campanha</h3>
        @if($locais->count())
            <ul class="mb-6 grid sm:grid-cols-2 gap-3">
                @foreach($locais as $local)
                    <li class="bg-[#23272f] rounded p-3 flex items-center gap-3">
                        @if($local->imagem)
                            <img src="{{ asset('storage/' . $local->imagem) }}" alt="{{ $local->nome }}" class="w-12 h-12 object-cover rounded border border-gray-800" />
                        @endif
                        <div>
                            <div class="font-bold text-gray-200">{{ $local->nome }}</div>
                            <div class="text-gray-400 text-sm">{{ Str::limit($local->descricao, 32) }}</div>
                            <a href="{{ route('locais.show', $local) }}" class="text-purple-400 text-xs hover:underline">Ver local</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            {{ $locais->links() }}
        @else
            <p class="text-gray-500 mb-6">Nenhum local cadastrado nesta campanha.</p>
        @endif

        <h3 class="text-2xl font-semibold text-purple-300 mb-3 mt-8">Personagens desta Campanha</h3>
        @if($personagens->count())
            <ul class="grid sm:grid-cols-2 gap-3">
                @foreach($personagens as $pers)
                    <li class="bg-[#23272f] rounded p-3 flex items-center gap-3">
                        @if($pers->imagem)
                            <img src="{{ asset('storage/' . $pers->imagem) }}" alt="{{ $pers->nome }}" class="w-12 h-12 object-cover rounded border border-gray-800" />
                        @endif
                        <div>
                            <div class="font-bold text-gray-200">{{ $pers->nome }}</div>
                            <div class="text-gray-400 text-sm">{{ $pers->classe }} - {{ $pers->raca }}</div>
                            <a href="{{ route('personagens.show', $pers) }}" class="text-purple-400 text-xs hover:underline">Ver personagem</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            {{ $personagens->links() }}
        @else
            <p class="text-gray-500">Nenhum personagem cadastrado nesta campanha.</p>
        @endif
    </div>
    <a href="{{ route('campanhas.index') }}" class="inline-block mt-8 text-purple-400 hover:underline">Voltar às campanhas</a>
</div>
@endsection
