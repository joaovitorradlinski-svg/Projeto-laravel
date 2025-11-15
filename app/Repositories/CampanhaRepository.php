<?php

namespace App\Repositories;

use App\Models\Campanha;
use App\Models\Personagem;
use Illuminate\Support\Facades\Auth;

class CampanhaRepository implements CampanhaRepositoryInterface
{
    public function all()
    {
        return Campanha::all();
    }

    public function find($id)
    {
        return Campanha::findOrFail($id);
    }

    public function create(array $data)
    {

        $data['user_id'] = Auth::id();
        return Campanha::create($data);
    }

    public function update($id, array $data)
    {
        $campanha = $this->find($id);
        $campanha->update($data);

        return $campanha;
    }

    public function delete($id)
    {
        return Campanha::destroy($id);
    }

    public function getPersonagens($campanhaId)
    {
        return Campanha::findOrFail($campanhaId)->personagens;
    }

    public function paginate($perPage = 10)
    {
    return Campanha::paginate($perPage);
    }

}
