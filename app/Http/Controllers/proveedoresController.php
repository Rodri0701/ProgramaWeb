<?php

namespace App\Http\Controllers;

use App\Models\provedore;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = provedore::all();

        return view('Proovedores/IndexProvedore', ['proveedores' => $proveedores ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Proovedores/altaproveedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* Restricciones o reglas para ingresar datos */
        $request ->validate([
            'NombrePro' => 'required',
            'Direccion' => 'required|max:50',
            'NumeroEmpre' => 'required',
            'Correo' => 'required'
]);
/* Nota, la primer variabe del objeto "clientes" pertenece a bd y el otro del campo que lo recibe */
        $proveedores = new provedore();
        $proveedores -> Nombre_del_provedor = $request -> input('NombrePro');
        $proveedores -> Direccion_de_la_empresa = $request ->input('Direccion');
        $proveedores -> Numero_de_la_empresa = $request ->input('NumeroEmpre');
        $proveedores -> Correo_de_la_empresa = $request ->input('Correo');
        $proveedores -> save();

        return view("leyout/index");

    }

    /**
     * Display the specified resource.
     */
    public function show(provedore $provedore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(provedore $id)
    {
        $proveedores = provedore::find($id);
        return view('Proovedores.provedoresedit',['proveedore' => $proveedores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedore = provedore::find($id);
        $proveedore -> delete();
        return view('leyout.index');
    }
}
