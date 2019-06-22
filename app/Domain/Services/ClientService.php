<?php

namespace App\Domain\Services;

use App\Domain\Repositories\ClientRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

class ClientService
{
    private $repository;
    public function __construct()
    {
        $this->repository = new ClientRepository();
    }

    public function getClients(array $filters): Collection
    {
        $attributes = new Fluent($filters);
        $data['name']              = $attributes->get('name', false);
        $data['couser_id']         = $attributes->get('couser_id', false);
        $data['course_class_id']   = $attributes->get('course_class_id', false);

        return $this->repository->getClients($data);
    }
}