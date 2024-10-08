<?php 

namespace App\Repositories\Interfaces;

interface TagRepositoryInterfase
{
    public function all();
    public function store($data);
    public function update($data,$tag);
}