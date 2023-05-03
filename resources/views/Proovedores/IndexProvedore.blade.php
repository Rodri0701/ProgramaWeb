@extends('leyout/principal')

@section('title', 'Proveedores')

@section('contenido')
<main>
    <div class="container pr-4">
        <h2>Listado de proveedores</h2>
      
{{--         <a  href="{{ url('proveedores/create' ) }}" class="btm btn-primary btn-sm"> Dar de alta un proveedor</a>
 --}}
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre_del_Provedor</th>
                    <th>Direccion_de_la_empresa</th>
                    <th>Numero_de_la_empresa</th>
                    <th>Correo_de_la_empresa</th>                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedore )
                <tr>
                    <td>{{$proveedore -> id }}</td>
                    <td>{{$proveedore -> Nombre_del_provedor}}</td>
                    <td>{{$proveedore -> Direccion_de_la_empresa}}</td>
                    <td>{{$proveedore -> Numero_de_la_empresa}}</td>
                    <td>{{$proveedore -> Correo_de_la_empresa}}</td>

                    <td>{{-- <a href="{{url ('proveedores/'.$proveedore ->id. '/edit')}}" class="btn btn-warning btn-sm"  > Actualizar proveedor</a> --}}</td>
                    <td>
                        <form action="{{ url('proveedores/'.$proveedore->id) }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" disabled> Eliminar proveedor</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                

            </tbody>
        </table>
        <a href="{{url(' ')}}" class="btn btn-secondary"> Regresar a la  página principal</a>

       

    </div>
</main>

@endsection