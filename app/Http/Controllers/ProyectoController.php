<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Listar todos los registros
    public function index(){
        $proyectos = Proyecto::orderby('id', 'asc')->get();
        return view('proyecto.index', compact('proyectos'));
    }

    // Formulario create
    public function create(){
        $clientes=Cliente::orderBy('id', 'asc')->get(); 
        return view('proyecto.create', compact('clientes'));
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $proyecto = new proyecto();
        $proyecto->cuantia = $request->cuantia;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();
        // $viaje->viajeros()->attach($request->viajero_id);
        return redirect()->route('proyecto.index');
    }

    // Ver un registro
    public function show(Proyecto $proyecto){
        $clientes = Cliente::orderBy('id', 'asc')->get();
        return view('proyecto.show',compact('proyecto','clientes'));
    }

    // Formulario editar un registro
    public function edit(Proyecto $proyecto){
        $clientes = Cliente::orderBy('id', 'asc')->get();
        return view('proyecto.edit', compact('proyecto','clientes'));
    }

    // Actualizar un registro
    public function update(Request $request, proyecto $proyecto){
     
        $proyecto->cuantia = $request->cuantia;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->descripcion = $request->descripcion;

        $proyecto->save();
        return redirect()->route('proyecto.index');
    }

    // Eliminar un registro
    public function destroy (proyecto $proyecto){
         $proyecto->delete();
        return redirect()->route('proyecto.index');
    }
}
