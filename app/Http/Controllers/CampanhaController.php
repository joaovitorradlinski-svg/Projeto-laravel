<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampanhaRequest;
use App\Http\Requests\UpdateCampanhaRequest;
use App\Services\CampanhaService;
use App\Models\Campanha;

class CampanhaController extends Controller
{
    protected $service;

    public function __construct(CampanhaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $campanhas = $this->service->paginate(10);
        return view('campanhas.index', compact('campanhas'));
    }

    public function show($id)
    {
    $campanha = Campanha::findOrFail($id);
    $locais = $campanha->locais()->paginate(4);
    $personagens = $campanha->personagens()->paginate(4);

    return view('campanhas.show', compact('campanha', 'locais', 'personagens'));
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

