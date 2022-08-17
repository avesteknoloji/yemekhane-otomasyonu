<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sepet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="sepet";
    protected $guarded=[];

  

    public function siparis(){
        return $this->hasone(siparis::class);
    }
}

