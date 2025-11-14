<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampanhaRequest;
use App\Http\Requests\UpdateCampanhaRequest;
use App\Services\CampanhaService;

class CampanhaController extends Controller
{
    protected $service;

    public function __construct(CampanhaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $campanhas = $this->service->all();
        return view('campanhas.index', compact('campanhas'));
    }

    public function show($id)
    {
        $campanha = \App\Models\Campanha::with(['locais', 'personagens'])->findOrFail($id);
        return view('campanhas.show', compact('campanha'));
    }

    public function create()
    {
        return view('campanhas.create');
    }

    public function store(StoreCampanhaRequest $request)
    {
        $this->service->create($request->all());
        return redirect()->route('campanhas.index')->with('successo', 'Campanha criada!');
    }

    public function edit($id)
    {
        $campanha = $this->service->find($id);
        return view('campanhas.edit', compact('campanha'));
    }

    public function update(UpdateCampanhaRequest $request, $id)
    {
        $this->service->update($id, $request->all());
        return redirect()->route('campanhas.index')->with('successo', 'Campanha atualizada!');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('campanhas.index')->with('successo', 'Campanha removida!');
    }
}

