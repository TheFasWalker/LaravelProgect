<?php 
namespace App\Repositories;

use App\Models\Firm;
use App\Repositories\Interfaces\FirmRepositoryInterfase;

class FirmRepository implements FirmRepositoryInterfase
{
    public function store($data)
    {
        Firm::create($data);
    }

    public function all(){
       return Firm::paginate(10);
    }
    
    public function update($data,$firm)
    {
        $firm->update($data);
    }
}