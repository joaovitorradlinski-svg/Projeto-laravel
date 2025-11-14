<?php

namespace App\Http\Controllers;

use App\Services\PersonagemService;
use App\Http\Requests\StorePersonagemRequest;
use App\Http\Requests\UpdatePersonagemRequest;

class PersonagemController extends Controller
{
    protected $service;

    public function __construct(PersonagemService $service)
{
    $this->service = $service;
}

public function index()
{
    $personagens = $this->service->all();
    return view('personagens.index', compact('personagens'));
}

public function show($id)
{
    $personagem = $this->service->find($id);
    return view('personagens.show', compact('personagem'));
}

public function create()
{
    $campanhas = $this->service->allCampanhas();
    return view('personagens.create', compact('campanhas'));
}

public function store(StorePersonagemRequest $request)
{

    $this->service->create($request->all());

    return redirect()->route('personagens.index')->with('successo', 'Personagem criado com sucesso!');
}

public function edit($id)
{
    $personagem = $this->service->find($id);
    $campanhas = $this->service->allCampanhas();
    return view('personagens.edit', compact('personagem', 'campanhas'));
}

public function update(UpdatePersonagemRequest $request, $id)
{
    $this->service->update($id, $request->all());

    return redirect()->route('personagens.index')->with('successo', 'Personagem atualizado com sucesso!');
}

public function destroy($id)
{
    $this->service->delete($id);

    return redirect()->route('personagens.index')->with('successo', 'Personagem removido com sucesso!');
}
}
