@extends('leyout/principal')

@section('title', 'Registro|Usuario')

@section('contenido')
<main>
    <table class="table table-hover">
      <thead>
          <tr>
            
              <th>id</th>
              <th>NombreProd</th>
              <th>Imagen</th>
              <th>Sinopsis</th>
              <th>Precio</th>
              <th>Stock</th>
              <th>id_prov</th>  

              <th></th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        
          @foreach($juegos as $prod)
          <tr>
              <td>{{$prod -> id}}</td>
              <td>{{$prod -> NombreProd}}</td>
              <td>{{$prod -> Imagen}}</td>
              <td>{{$prod -> Sinopsis}}</td>
              <td>{{$prod -> Precio}}</td>
              <td>{{$prod -> Stock}}</td>
              <td>{{$prod -> id_prov -> id ->NombreProd}}</td>
          </tr>
          @endforeach
          

      </tbody>
  </table>
</main>
