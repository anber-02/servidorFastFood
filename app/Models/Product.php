<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre','descripcion','precio','imagen','estado','category_id' //se rellenan manualmente
    ];
    public function categories(){
        return $this->belongsTo(category::class);
    }
}
