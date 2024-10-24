<?php 

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterfase
{
    public function all();
    public function store($data);
    public function update($data,$category);
    public function storeForApi($data);
}