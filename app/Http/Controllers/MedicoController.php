<?php

namespace App\Http\Controllers;


use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function listar(){
        return view('medicos/list',[
            'medicos' => Medico::orderBy('nombre', 'asc')->get()
        ]);
    }

    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        return redirect()->route('lista_medicos')->with('success', 'El médico ha sido eliminado correctamente.');
    }

}
