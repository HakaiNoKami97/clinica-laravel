<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_paciente',
        'id_enfermedad',
    ];

    public function historial_enfermedad(){
        return $this->belongsTo(Enfermedad::class,'id_enfermedad','id');
    }
}
