<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"  >
    <link rel="icon" href="video_game_mario_enemy_icon_187529.ico" >
    <title>Juegos</title>
    <style>
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
    </style>
</head>
<body>

    <div class="top-bar">
        <!-- Aqui va el logo -->
          <div class="logo">
          <a href="{{url (' ') }}">Nombre de la tienda</a>
        </div>
        <!-- Parte del logo -->
        <!-- <div class="search-bar">
          <form action="#" method="get">
            <input type="text" placeholder="Buscar productos">
            <button type="submit">Buscar</button>
          </form>
        </div>
   -->      <div class="account-menu">
          <a href="#">Iniciar sesión</a>
          <a href="{{url('clientes/create')}}">Crear cuenta</a>
          <a href="#">Carrito de compras</a>
        </div>

        <div class="account-menu">
          <a href="{{url('proveedores')}}">Ver nuestros proveedores</a>
        </div>
        <div class="account-menu">
          <a href="{{url('juegos')}}">Ver nuestros juegos</a>
        </div>
        
      </div>

     {{--  <div class="content">
        <!-- Aquí va el contenido principal de la página -->
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3> 
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
      
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
      
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
      
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
      
        
      
        <div class="card">
          <img src="OIP (1).jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
      
        <div class="card">
          <img src="OIP.jpg" alt="Imagen del artículo">
          <h3>Título del artículo</h3>
          <p>Descripción breve del artículo.</p>
          <a href="#">Leer más</a>
        </div>
        
      </div> --}}

      
</body>
</html>