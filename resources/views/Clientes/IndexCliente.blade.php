@extends('leyout/principal')

@section('title', 'cliente')

@section('contenido')
<main>
    <div class="container pr-4">
        <h2>Listado de usuarios</h2>

        <a href="{{ url('clientes/create' ) }}" class="btm btn-primary btn-sm"> Nuevo Usuario</a>
            
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>NombreUsuario</th>
                    <th>NumeroCelular</th>
                    <th>Correo</th>
                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente -> id }}</td>
                    <td>{{$cliente -> Nombres}}</td>
                    <td>{{$cliente -> Apellidos}}</td>
                    <td>{{$cliente -> NombreUsuario}}</td>
                    <td>{{$cliente -> NumeroCelular}}</td>
                    <td>{{$cliente -> Correo}}</td>
                    <td><a href="{{url ('clientes/'.$cliente ->id. '/edit')}}" class="btn btn-warning btn-sm"> Actualizar </a></td>
                    <td>
                        <form action="{{ url('clientes/'.$cliente->id) }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       

    </div>
</main>

@endsection