<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_medico',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'especialidad',
        'id_contrato',
    ];

    public function medico_paciente(){
        return $this->belongsTo(Paciente::class,'id_medico','id_medico');
    }

    public function medico_tipocontrato(){
        return $this->hasMany(TipoContrato::class,'id_contrato','id');
    }
}
