<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'afecta',
        'descripcion',
    ];

    public function enfermedad_historial(){
        return $this->hasMany(Historial::class,'id','id_enfermedad');
    }
}
