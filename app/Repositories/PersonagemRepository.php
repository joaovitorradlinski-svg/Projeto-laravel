<?php

namespace App\Repositories;

use App\Models\Personagem;

class PersonagemRepository implements PersonagemRepositoryInterface
{
    public function all() { return Personagem::all(); }
    public function find($id) { return Personagem::findOrFail($id); }
    public function create(array $data) { return Personagem::create($data); }
    public function update($id, array $data) { $personagem = $this->find($id); $personagem->update($data); return $personagem; }
    public function delete($id) { return Personagem::destroy($id); }

    public function paginate($perPage = 10)
{
    return Personagem::query()->paginate($perPage);
}


}
