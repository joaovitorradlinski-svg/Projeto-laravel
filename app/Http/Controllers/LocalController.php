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
        $locais = $this->service->paginate(perPage: 10);
        return view('locais.index', compact('locais'));
    }

    public function create()
    {
        $campanhas = $this->service->getCampanhas();
        return view('locais.create', compact('campanhas'));
    }

    public function store(StoreLocalRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('imagem')) {
            $filename = time() . '_' . $request->file('imagem')->getClientOriginalName();
            $path = $request->file('imagem')->storeAs('imagens', $filename, 'public');
            $data['imagem'] = $path;
        }

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

        return view('locais.edit', compact('local', 'campanhas'));
    }

    public function update(UpdateLocalRequest $request, $id)
    {
        $data = $request->validated();

        if ($request->hasFile('imagem')) {
            $filename = time() . '_' . $request->file('imagem')->getClientOriginalName();
            $path = $request->file('imagem')->storeAs('imagens', $filename, 'public');
            $data['imagem'] = $path;
        }

        $this->service->update($id, $data);

        return redirect()->route('locais.show', $id)->with('successo', 'Local atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return redirect()->route('locais.index')->with('successo', 'Local deletado com sucesso!');
    }
}
