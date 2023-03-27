<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre','estado' //se rellenan manualmente
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
}
