<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = cliente::all();

        return view('Clientes.IndexCliente', ['clientes' => $clientes ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientes.creadorCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'Numero' => 'required|max:10',
            'Nombres' => 'required|max:20',
            'Apellidos' => 'required |max:20',
            'Correo' => 'required |unique:clientes|email ',
            'Nombreusuario' => 'required |unique:clientes'
        ]);

        $clientes = new cliente(); /* Nota, la primer variabe del objeto "clientes" pertenece a bd y el otro del campo que lo recibe */
        $clientes -> Nombres = $request -> input('Nombres');
        $clientes -> Apellidos = $request -> input('Apellidos');
        $clientes -> NombreUsuario= $request -> input('Nombreusuario');
        $clientes -> NumeroCelular = $request -> input('Numero');
        $clientes -> Correo = $request -> input('Correo');
        $clientes -> Contraseña = $request -> input('Contra');
        $clientes -> save();

        return view("leyout/index");

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = cliente::find($id);
        return view('Clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'Numero' => 'required|max:10',
            'Nombres' => 'required|max:20',
            'Apellidos' => 'required |max:20',
            'Correo' => 'required|email|unique:clientes,Correo,'.$id
        ]);

        $clientes = cliente::find($id);
        $clientes -> Nombres = $request -> input('Nombres');
        $clientes -> Apellidos = $request -> input('Apellidos');
        $clientes -> Direccion = $request -> input('Direccion');
        $clientes -> NumeroCelular = $request -> input('Numero');
        $clientes -> Correo = $request -> input('Correo');
        $clientes -> Contraseña = $request -> input('Contra');
        $clientes -> save();

        return view("Clientes.message", ["msg" => "Se modificó con exito :D"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente -> delete();

        return redirect('clientes');
    }
}
