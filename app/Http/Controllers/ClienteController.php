<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
     // Listar todos los registros
     public function index(){
        $clientes = cliente::orderby('id', 'asc')->get();
        return view('cliente.index', compact('clientes'));
    }
    
    // Formulario create
    public function create(){
        return view('cliente.create');
    }

    // Registrar en base de datos un cliente
    public function store(Request $request){
        $cliente = new cliente();
        $cliente->telefono = $request->telefono;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;
        $cliente->save();
        return redirect()->route('cliente.index');
    }

     // Ver un registro
     public function show(cliente $cliente){
        return view('cliente.show',compact('cliente'));
    }

    // Formulario editar un registro
    public function edit(cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }

      // Actualizar un registro
      public function update(Request $request, cliente $cliente){
       
        $cliente->telefono = $request->telefono;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;

        $cliente->save();
        return redirect()->route('cliente.index');
    }

    // Eliminar un registro
    public function destroy (cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
