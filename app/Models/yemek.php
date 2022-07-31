<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class yemek extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ="yemek";
    protected $guarded=[];

    public function yemek_kategori(){
        return $this->belongsTo(yemek_kategori::class);
    }
}
