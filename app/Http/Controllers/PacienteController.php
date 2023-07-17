<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function listar(){
        return view('pacientes/list',[
            'pacientes' => Paciente::all()
        ]);
    }

    public function create()
    {
        return view('paciente/create',[
            'Medicos' => Medico::all(),
        ]);
    }

    public function edit( $id )
    {
        return view('paciente/edit',[
            'Paciente' => Paciente::Where('id',like,$id) -> get(),
        ]);
    }

    public  function store()
    {
        $paciente = Paciente::create([
            'taqActivos'    => $request -> taqActivos,
            'nombre'        => $request -> nombre,
            'descripcion'   => $request -> descripcion,
            'horasuso'      => $request -> horasuso,
            'serial'        => $request -> serial,
            'dependencia'   => $request -> dependencia,
            'urlImage'      => "urlImage/default-image.jpg",
        ]);

        Session::flash('paciente_creado','Se ha registrado el paciente correctamente.');
        return redirect()->route('pacientes.list');
    }

    public  function update()
    {
        $paciente = Paciente::Update([
            'taqActivos'    => $request -> taqActivos,
            'nombre'        => $request -> nombre,
            'descripcion'   => $request -> descripcion,
            'horasuso'      => $request -> horasuso,
            'serial'        => $request -> serial,
            'dependencia'   => $request -> dependencia,
            'urlImage'      => "urlImage/default-image.jpg",
        ]);

        Session::flash('paciente_Actualizado','Se ha Actualizado el paciente correctamente.');
        return redirect()->route('pacientes.list');
    }
}
