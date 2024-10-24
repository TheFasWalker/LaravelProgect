<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Firm extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'firms';
    protected $guarded =[];

    public function sity(){
        return $this->belongsTo(Sity::class,'sity_id','id');
    }
}
