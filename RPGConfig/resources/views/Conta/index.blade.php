@extends('layouts.app')

@section('title', 'Minha Conta')

@section('content')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
        <h1 class="text-2xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
            Bem-vindo, {{ $user->apelido ?? $user->name }}
        </h1>

        <p class="mb-2 text-gray-700 dark:text-gray-300"><strong>Nome completo:</strong> {{ $user->name }}</p>
        <p class="mb-2 text-gray-700 dark:text-gray-300"><strong>Apelido:</strong> {{ $user->apelido ?? 'Não definido' }}</p>
        <p class="mb-6 text-gray-700 dark:text-gray-300"><strong>Email:</strong> {{ $user->email }}</p>

        <div class="space-x-2">
            <a href="{{ route('conta.edit') }}" class="inline-block px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition">
                Editar Perfil
            </a>
            <a href="{{ route('conta.show') }}" class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                Detalhes da Conta
            </a>
        </div>
    </div>
</div>
@endsection
