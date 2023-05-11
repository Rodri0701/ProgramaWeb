{{-- @extends('leyout/principal') --}}

@section('title', 'Registro|Usuario')
<link rel="stylesheet" href="style.css">
<Style>
      .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        display: inline-block;
        margin: 10px;
        padding: 10px;
        width: 300px;
      }
  
      .card img {
        max-width: 100%;
      }
  
      .card h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
      }
  
      .card p {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 10px;
      }
      .body{

      }
</Style>

<main>
          @foreach($juegos as $prod)
        

  <div class="card">
    <img src= {{$prod -> Imagen}} alt="Imagen del artículo">
    <h3>{{$prod -> NombreProd}}</h3> 
    <p>Sinopsis: {{$prod -> Sinopsis}}</p>
    <p>Precio en tienda en linea {{$prod -> Precio}}</p>
    <p>Proveedor: {{$prod -> id_prov}} </p>
    <a href="#">Comprar</a>
  </div>
  @endforeach

</main>
<button>
    <a href="{{url(' ')}}"> Regresar a la  página principal</a>
  </button>
