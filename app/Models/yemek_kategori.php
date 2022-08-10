<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class yemek_kategori extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ="yemek_kategori";
    protected $guarded=[];

    public function yemekler(){
        //kategorilerin  bir çok yemeği vardır
        return $this->hasMany(yemek::class);
    }
}
