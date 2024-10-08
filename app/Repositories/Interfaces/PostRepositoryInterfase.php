<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterfase
{
    public function all($published);
    public function store($data);
}