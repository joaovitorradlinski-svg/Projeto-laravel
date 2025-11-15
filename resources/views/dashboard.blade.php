@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-8">

    <h1 class="text-4xl font-extrabold text-purple-400">Dashboard</h1>
    <p class="text-gray-400">Resumo rápido das suas campanhas e aventuras</p>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

        <div class="bg-gradient-to-tr from-purple-700 to-purple-900 p-6 rounded-xl shadow-lg text-white flex flex-col items-center">
            <div class="text-6xl font-extrabold">{{ $campanhasCount }}</div>
            <div class="mt-2 uppercase tracking-wide font-semibold text-lg">Campanhas</div>
            <a href="{{ route('campanhas.index') }}" class="mt-4 px-4 py-1 border border-white rounded hover:bg-white hover:text-purple-900 transition">
                Ver todas
            </a>
        </div>

        <div class="bg-gradient-to-tr from-green-700 to-green-900 p-6 rounded-xl shadow-lg text-white flex flex-col items-center">
            <div class="text-6xl font-extrabold">{{ $locaisCount }}</div>
            <div class="mt-2 uppercase tracking-wide font-semibold text-lg">Locais</div>
            <a href="{{ route('locais.index') }}" class="mt-4 px-4 py-1 border border-white rounded hover:bg-white hover:text-green-900 transition">
                Ver todos
            </a>
        </div>

        <div class="bg-gradient-to-tr from-yellow-700 to-yellow-900 p-6 rounded-xl shadow-lg text-white flex flex-col items-center">
            <div class="text-6xl font-extrabold">{{ $sessoesCount }}</div>
            <div class="mt-2 uppercase tracking-wide font-semibold text-lg">Sessões</div>
            <a href="{{ route('sessoes.index') }}" class="mt-4 px-4 py-1 border border-white rounded hover:bg-white hover:text-yellow-900 transition">
                Ver todas
            </a>
        </div>

        <div class="bg-gradient-to-tr from-pink-700 to-pink-900 p-6 rounded-xl shadow-lg text-white flex flex-col items-center">
            <div class="text-6xl font-extrabold">{{ $personagensCount }}</div>
            <div class="mt-2 uppercase tracking-wide font-semibold text-lg">Personagens</div>
            <a href="{{ route('personagens.index') }}" class="mt-4 px-4 py-1 border border-white rounded hover:bg-white hover:text-pink-900 transition">
                Ver todos
            </a>
        </div>

    </div>

    <div class="mt-10">
        <a href="{{ route('campanhas.create') }}"
        class="inline-block bg-purple-600 text-white px-8 py-3 rounded-xl text-lg font-semibold shadow-lg hover:bg-purple-700 transition">
        + Criar nova campanha
        </a>
    </div>

</div>
@endsection
