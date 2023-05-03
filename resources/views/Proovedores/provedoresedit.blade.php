@extends('leyout/principal')

@section('title', 'Editar|Proveedor')

@section('contenido')
<main>
    <div class="container py-4" >
        <h2> Editando Perfil de Proveedor</h2>

        @if ($errors ->any())
        <div class="altert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors-> all() as $error)
                <li>{{ $errors }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss = "alert" aria-label="Close"></button>
        </div>
            
        @endif

        <form action="{{ url('proveedores/'.$proveedores-> id)}}" method="POST">
            @method("PUT")
        @csrf
        <div class="mb-3 row">
            <label for="NombrePro" class="col-sm2 col-form-label"> Nombre del proveedor </label>
            <div class="coll-sm-5">
                <input type="text" class="form-control" name="NombrePro" id="NombrePro" value="{{ old ('NombrePro')}}" required>
            </div>
        </div> {{-- Fin de entrada de nombre --}}
        <div class="mb-3 row">
            <label for="Direccion" class="col-sm2 col-form-label">Dirección de la empresa </label>
            <div class="coll-sm-5">
                <input type="text" class="form-control" name="Direccion" id="Direccion" value="{{ old ('Direccion')}}" required>
            </div>
        </div>{{-- Fin de entrada de  Direccion --}}
        <div class="mb-3 row">
            <label for="NumeroEmpre" class="col-sm2 col-form-label"> Número de la empresa </label>
            <div class="coll-sm-5">
                <input type="number" class="form-control" name="NumeroEmpre" id="NumeroEmpre" value="{{ old ('NumeroEmpre')}}"  required>
            </div>
        </div>{{-- Fin de entrada de Numero --}}
        
        <div class="mb-3 row">
            <label for="Correo" class="col-sm2 col-form-label">Correo de la empresa</label>
            <div class="coll-sm-5">
                <input type="email" class="form-control" name="Correo" id="Correo" value="{{ old ('Correo')}}" required>
            </div>
        </div>{{-- Fin de entrada de correo --}}
        
            <a href="{{url('clientes')}}" class="btn btn-secondary"> Regresar</a>

            <button type="submit" class="btn btn-success"> Guardar </button>

        </form>

        
        </div> 
</main>