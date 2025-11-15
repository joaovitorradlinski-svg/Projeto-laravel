@extends('layouts.app')

@section('title', 'Editar Conta')

@section('content')
<div class="max-w-md mx-auto mt-12 p-6 bg-gray-800 rounded-lg shadow-md">
    <h1 class="text-xl font-semibold mb-4 text-white">Editar Conta</h1>

    <form action="{{ route('conta.update') }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Nome" required
            class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-purple-600">
        @error('name')
        <p class="text-red-400 text-sm">{{ $message }}</p>
        @enderror

        <input type="text" name="apelido" value="{{ old('apelido', $user->apelido) }}" placeholder="Apelido"
            class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-purple-600">
        @error('apelido')
        <p class="text-red-400 text-sm">{{ $message }}</p>
        @enderror

        <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="E-mail" required
            class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-purple-600">
        @error('email')
        <p class="text-red-400 text-sm">{{ $message }}</p>
        @enderror

        <button type="submit"
            class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">Salvar Alterações</button>
    </form>

    <p class="mt-4 text-center text-gray-400">
        <a href="{{ route('conta.show') }}" class="underline hover:text-white">Voltar</a>
    </p>
</div>
@endsection
