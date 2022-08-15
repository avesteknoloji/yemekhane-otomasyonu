<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siparis extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='siparis';
    protected $fillable=['siparis_tutari', 'durum', 'sepet_id'];

    public function sepet(){
        return $this->belongsTo(sepet::class,'sepet_id');
    }
}
