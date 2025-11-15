<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campanha;
use App\Models\Local;
use App\Models\Sessao;
use App\Models\Personagem;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        if (!$userId) {
        abort(403, 'Usuário não autenticado.');
    }

        $campanhasCount = Campanha::where('user_id', $userId)->count();
        $locaisCount = Local::whereHas('campanha', fn($q) => $q->where('user_id', $userId))->count();
        $personagensCount = Personagem::whereHas('campanha', fn($q) => $q->where('user_id', $userId))->count();

        return view('dashboard', compact('campanhasCount', 'locaisCount', 'sessoesCount', 'personagensCount'));
    }
}
