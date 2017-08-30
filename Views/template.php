<?php namespace Views;

  $template = new Template();
  class Template {
    public function __construct() {
?>
<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Inicio | Interboard</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL;?>Views/template/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL;?>Views/template/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL;?>Views/template/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL;?>Views/template/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL;?>Views/template/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL;?>Views/template/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL;?>Views/template/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL;?>Views/template/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL;?>Views/template/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL;?>Views/template/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL;?>Views/template/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL;?>Views/template/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL;?>Views/template/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL;?>Views/template/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo URL;?>Views/template/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	</head>
	<body>
    <?php if(LOGGED) { ?>
		<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Control de Estudiantes</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo URL; ?>">Inicio</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grupos <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>groups">Listado</a></li>
		            <li><a href="<?php echo URL; ?>groups/add">Agregar</a></li>
                <li><a href="<?php echo URL; ?>groups/search">Buscar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>students">En un grupo</a></li>
                <li><a href="<?php echo URL; ?>students/noGroup">Sin grupo</a></li>
		            <li><a href="<?php echo URL; ?>students/add">Agregar</a></li>
                <li><a href="<?php echo URL; ?>students/search">Buscar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maestros <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>teachers">Listado</a></li>
		            <li><a href="<?php echo URL; ?>teachers/add">Agregar</a></li>
                <li><a href="<?php echo URL; ?>teachers/search">Buscar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clases <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>lessons">Listado</a></li>
		            <li><a href="<?php echo URL; ?>lessons/add">Agregar</a></li>
                <li><a href="<?php echo URL; ?>lessons/search">Buscar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tareas <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>homeworks">Listado</a></li>
		            <li><a href="<?php echo URL; ?>homeworks/add">Agregar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Avisos <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>notifications">Listado</a></li>
		            <li><a href="<?php echo URL; ?>notifications/add">Agregar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Eventos <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>events">Listado</a></li>
		            <li><a href="<?php echo URL; ?>events/add">Agregar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>reports">Listado</a></li>
		            <li><a href="<?php echo URL; ?>reports/add">Agregar</a></li>
		          </ul>
		        </li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Comentarios <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>comments">Listado</a></li>
		            <li><a href="<?php echo URL; ?>comments/add">Agregar</a></li>
		          </ul>
		        </li>
		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><?php echo USERNAME; ?></a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
<?php
      }
    }

		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		Todos los derechos reservados &copy 2017 <br>
		Diego Bernal | <b>Interboard</b>
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
	</body>
	</html>

<?php
    }
  }
?>
