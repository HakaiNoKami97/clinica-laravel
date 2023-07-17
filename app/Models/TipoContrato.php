<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
    ];

    public function tipocontrato_medico(){
        return $this->belongsTo(Medico::class,'id','id_contrato');
    }
}
