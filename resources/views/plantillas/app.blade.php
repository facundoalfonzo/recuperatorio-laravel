
<html>
<link rel="stylesheet" href="/css/estilo.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>

      
      <a class="link" href="/movies">Peliculas</a>  
      <a class="link" href="/actores">Actores</a>
      <a class="link" href="/genre">Generos</a>
    </nav>
    <div class="contenido">
    @yield('contenido')
  </div>

    <footer>
      <a class="link" href="/">inicio</a>
      <a class="link" href="/agregarActor">Agregar un Actor</a>
    </footer>
  </body>
</html>
