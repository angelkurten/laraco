<?php


namespace App\Repositories\Contracts;


interface CourseRepositoryInterface
{
    public function getModel();

    public function create(array $data);

    public function update(array $data);

    public function findById(int $id);

    public function all();
}
