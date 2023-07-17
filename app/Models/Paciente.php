<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'id_medico',
    ];

    public function paciente_historial(){
        return $this->hasMany(Historial::class,'id','id_paciente');
    }

    public function paciente_medico(){
        return $this->hasMany(Medico::class,'id_medico','id_medico');
    }
}
