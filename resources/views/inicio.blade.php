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
      <li><a href="#intro">Home</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#Geografia1">Noticias</a></li>
      <li><a href="#">Galeria</a></li>
      <li><a href="#">Contactanos</a></li>
      </ul>
      <form action='/search' id='search' method='get' name='searchForm' style='display:inline;'> 
<input id='search-box' name='q' onblur='if (this.value == &quot;&quot;) this.value = &quot;Buscar...&quot;;' onfocus='if (this.value == &quot;Buscar...&quot;) this.value = &quot;&quot;;' size='28' type='text' value='Buscar...'/></form>
  </div>
</nav>
</header>

  <body>
  <div class="inicio"></div>
    <div id="intro" data-speed="4" data-type="background">
      
        <div class="intro-unit">
            <h2 class="introduccion">Bienvenido a Puyehue</h2>
        </div>

        <div class="col-md-12">
<div class="col-md-12 col-md-offset-3">
<div class="col-md-4"><button type="reset" class="btn btn-primary" id="Quienessomos">Quienes Somos</button></div>
<a href="mapa"><div class="col-md-4"><button type="button" class="btn btn-primary" id="btnComollegar">Como llegar</button></div></a>
</div>
  </div>
  
    </div>
 
 
    <div id="servicios">
    
      <div class="col-md-10 col-md-offset-3">
  <div class="col-md-2">
    <a href="sitios"><img src="img/Sitios.jpg" class="img-circle" alt="Sitios.jpg" width="107" height="109"></a>
    <div class="col-md-2">
    <h4>Sitios</h4>
    </div>
    </div>
    <div class="col-md-2">
    <a href="gastronomia"><img src="img/Gastronomia.jpg" class="img-circle" alt="Gastronomia.jpg" width="107" height="109"></a>
    <h4>Gastronomia</h4>
    </div>
    <div class="col-md-2">
    <a href="evento"><img src="img/Evento.jpg" class="img-circle" alt="Evento.jpg" width="107" height="109"></a>
    <div class="col-md-2">
    <h4>Evento</h4>
    </div>
    </div>
    <div class="col-md-2">
    <a href="alojamiento"><img src="img/Alojamiento.jpg" class="img-circle" alt="Alojamiento.jpg" width="107" height="109"></a>
    <h4>Alojamiento</h4>
    </div>
</div>
        <div class="intro-unit">
        </div>
    </div>
 
    <div id="Geografia1" data-speed="10" data-type="background">
    <div class="col-md-3" id="art">
    <article>
			<h2>Geografia de Puyehue</h2>
				<p>La comuna de Puyehue se encuentra en la zona noreste de la Provincia de Osorno y de la región de Los Lagos. El principal centro urbano de la comuna es la villa de Entre Lagos ubicado a aproximadamente 46 kilómetros oeste, a la cual se llega mediante la ruta internacional 215.

Una importante parte del territorio se encuentra dentro del Parque nacional Puyehue. Este parque, junto a otros ubicados en Los Lagos y Los Ríos, son parte de los Bosques Templados Lluviosos de los Andes Australes, un área protegida declarada reserva de la biosfera por la Unesco en septiembre de 2007. Algunas instituciones como el Fondo Mundial para la Naturaleza han reconocido estos bosques como un punto clave en la conservación internacional, y sus bosques catalogados como uno de los remanentes boscosos más grandes y ecológicamente intactos de la Tierra por el World Resources Institute.</p>
		</article>
    </div>
    <div class="col-md-offset-10" id="twt">
    <a class="twitter-timeline"  href="https://twitter.com/hashtag/puyehue" data-widget-id="822204907226824704">Tweets sobre #puyehue</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
    </div>

    <div id="Geografia1" data-speed="10" data-type="background">
    </div>
<div class="Geografia2">
		
	</div>

<div id="Geografia1" data-speed="10" data-type="background">
    </div>

  <div id="servicios" data-speed="12" data-type="background">
      <div class="col-md-10 col-md-offset-3">
  <div class="col-md-2">
    <a href="jefe"><img src="img/persona.jpg" class="img-circle" alt="persona.jpg" width="107" height="109"></a>
    <div class="col-md-2">
    <h4>Jefe</h4>
    </div>
    </div>
    <div class="col-md-2">
    <a href="editor"><img src="img/persona.jpg" class="img-circle" alt="persona.jpg" width="107" height="109"></a>
    <h4>Editor</h4>
    </div>
    <div class="col-md-2">
    <a href="encargado"><img src="img/persona.jpg" class="img-circle" alt="persona.jpg" width="107" height="109"></a>
    <div class="col-md-2">
    <h4>Encargado</h4>
    </div>
    </div>
    <div class="col-md-2">
    <a href="practicante"><img src="img/persona.jpg" class="img-circle" alt="persona.jpg" width="107" height="109"></a>
    <h4>Practicante</h4>
    </div>
</div>

<div id="Geografia1" data-speed="10" data-type="background">
    </div>
  
  
    
</body>
</html>