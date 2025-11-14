<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use App\Services\LocalService;


class LocalController extends Controller
{
    protected $service;

    public function __construct(LocalService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $locais = $this->service->all();
        return view('locais.index', compact('locais'));
    }

    public function create()
    {
        $campanhas = $this->service->getCampanhas();
        return view('locais.create', compact('campanhas'));
    }

    public function store(StoreLocalRequest $request)
    {
        $data = $request->validate([
            'campanha_id' => 'required|exists:campanhas,id',
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $this->service->create($data);

        return redirect()->route('locais.index')->with('successo', 'Local criado com sucesso!');
    }

    public function show($id)
    {
        $local = $this->service->find($id);
        return view('locais.show', compact('local'));
    }

    public function edit($id)
    {
        $local = $this->service->find($id);
        $campanhas = $this->service->getCampanhas();
        return view('locais.edit', compact('local'));
    }

    public function update(UpdateLocalRequest $request, $id)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $this->service->update($id, $data);

        return redirect()->route('locais.show', $id)->with('successo', 'Local atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('locais.index')->with('successo', 'Local deletado com sucesso!');
    }
}
