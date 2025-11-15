<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ContaController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('conta.index', compact('user'));
    }


    public function show()
    {
        $user = Auth::user();
        return view('conta.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('conta.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'apelido' => 'nullable|string|max:50',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->name = $request->name;
        $user->apelido = $request->apelido;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('conta.show')->with('success', 'Informações da conta atualizadas com sucesso!');
    }

    public function destroy()
    {
        $user = Auth::user();
        Auth::logout();

        $user->delete();

        return redirect('/')->with('success', 'Sua conta foi deletada com sucesso!');
    }
}
