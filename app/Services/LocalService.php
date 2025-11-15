<?php

namespace App\Services;

use App\Repositories\LocalRepositoryInterface;

class LocalService
{
    protected $repository;

    public function __construct(LocalRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
    public function getCampanhas()
    {
    return \App\Models\Campanha::all();
    }
    public function paginate($perPage = 10)
    {
    return $this->repository->paginate($perPage);
    }
}
