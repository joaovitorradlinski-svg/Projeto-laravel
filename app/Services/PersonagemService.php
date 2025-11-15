<?php

namespace App\Services;

use App\Repositories\PersonagemRepositoryInterface;
use App\Repositories\CampanhaRepositoryInterface;

class PersonagemService
{
    protected $repository;
    protected $campanhaRepository;

    public function __construct(PersonagemRepositoryInterface $repository, CampanhaRepositoryInterface $campanhaRepository)
    {
    $this->repository = $repository;
    $this->campanhaRepository = $campanhaRepository;
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
    public function allCampanhas()
    {
    return $this->campanhaRepository->all();
    }
    public function paginate($perPage = 10)
    {
    return $this->repository->paginate($perPage);
    }
}
