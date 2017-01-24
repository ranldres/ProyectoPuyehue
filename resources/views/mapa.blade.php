<!DOCTYPE html>
<html> 
  <head>  
     <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8">
     <script src="js/jquery/jquery-3.1.0.min.js" type="text/javascript"></script>
     <link rel="stylesheet" href="{{("/css/bootstrap.min.css")}}" />
     <link rel="stylesheet" href="{{("/css/bootstrap-theme.min.css")}}" />
     <link rel="stylesheet" href="{{asset("/css/estilos.css")}}">
     <link href="css/style.css" rel="stylesheet">
     <script src="script.js"></script>
     
  </head>

<header>
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <img src="img/Icono.jpg" class="img-thumbnail" alt="icono" width="50" height="50" href="#intro">
  </div>
 
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index">Home</a></li>
      <li><a href="index#servicios">Servicios</a></li>
      <li><a href="index#Geografia1">Noticias</a></li>
      <li><a href="#">Galeria</a></li>
      <li><a href="#">Contactanos</a></li>
      </ul>
      <form action='/search' id='search' method='get' name='searchForm' style='display:inline;'> 
<input id='search-box' name='q' onblur='if (this.value == &quot;&quot;) this.value = &quot;Buscar...&quot;;' onfocus='if (this.value == &quot;Buscar...&quot;) this.value = &quot;&quot;;' size='28' type='text' value='Buscar...'/></form>
  </div>
</nav>
</header>

<body>
    <div id="intro" data-speed="4" data-type="background">
  <div class="mapa">
  <div class="col-md-9 col-md-offset-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d83233.42225952599!2d-72.27771258601287!3d-40.76442873039022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-40.7659729!2d-72.23536469999999!4m5!1s0x96171827c25a4d41%3A0x2324220a2fadb222!2sPuyehue%2C+X+Regi%C3%B3n!3m2!1d-40.7685941!2d-72.236379!5e1!3m2!1ses-419!2scl!4v1482188556771" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
    </body>
</html>