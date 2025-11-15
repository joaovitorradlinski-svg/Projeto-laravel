<?php

namespace App\Repositories;

use App\Models\Local;

class LocalRepository implements LocalRepositoryInterface
{
    public function all() { return Local::all(); }
    public function find($id) { return Local::findOrFail($id); }
    public function create(array $data) { return Local::create($data); }
    public function update($id, array $data) { $local = $this->find($id); $local->update($data); return $local; }
    public function delete($id) { return Local::destroy($id); }

    public function paginate($perPage = 10)
    {
    return Local::paginate($perPage); // Altere para o Model correto!
    }

}
