@extends('leyout/principal')

@section('title', 'Registro|Usuario')

@section('contenido')

<main>

    <div class="container py-4" >
        <h2> Registrar una nueva cuenta</h2>

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

        <form action="{{ url('clientes')}}" method="POST">
        @csrf
            <div class="mb-3 row">
                <label for="Nombres" class="col-sm2 col-form-label"> Nombre(s)</label>
                <div class="coll-sm-5">
                    <input type="text" class="form-control" name="Nombres" id="Nombres" value="{{ old ('Nombres')}}" required>
                </div>
            </div> {{-- Fin de entrada de nombre --}}
            <div class="mb-3 row">
                <label for="Apellidos" class="col-sm2 col-form-label">Apellido(s)</label>
                <div class="coll-sm-5">
                    <input type="text" class="form-control" name="Apellidos" id="Apellidos" value="{{ old ('Apellidos')}}" required>
                </div>
            </div>{{-- Fin de entrada de  Apellidos --}}
            <div class="mb-3 row">
                <label for="Nombreusuario" class="col-sm2 col-form-label">Nombre de usuario </label>
                <div class="coll-sm-5">
                    <input type="text" class="form-control" name="Nombreusuario" id="Nombreusuario" value="{{ old ('Nombreusuario')}}"  required>
                </div>
            </div>{{-- Fin de entrada de direccion --}}
            
            <div class="mb-3 row">
                <label for="Numero" class="col-sm2 col-form-label">Número de celular</label>
                <div class="coll-sm-5">
                    <input type="number" class="form-control" name="Numero" id="Numero" value="{{ old ('Numero')}}" required>
                </div>
            </div>{{-- Fin de entrada de Numero --}}
            
            <div class="mb-3 row">
                <label for="Correo" class="col-sm2 col-form-label">Correo</label>
                <div class="coll-sm-5">
                    <input type="email" class="form-control" name="Correo" id="Correo" value="{{ old ('Correo')}}" required>
                </div>
            </div>{{-- Fin de entrada de correo --}}
            
            <div class="mb-3 row">
                <label for="Contra" class="col-sm2 col-form-label">Contraseña</label>
                <div class="coll-sm-5">
                    <input type="password" class="form-control" name="Contra" id="Contra" value="{{ old ('Contra')}}" required>
                </div>
            </div>{{-- Fin de entrada de contra --}}

            <a href="{{url(' ')}}" class="btn btn-secondary"> Regresar a la  página principal</a>

            <button type="submit" class="btn btn-success"> Registrar </button>

        </form>

        
        </div> 
</main>