<?php

namespace App\Repositories\Contracts;


interface ClienteRepositoryInterface
{
    public function all();
    public function allclients();
    public function create(array $data):Bool;
    public function find(int $id);
    public function update(array $data, int $id):Bool;
    public function delete(int $id):Bool;
}