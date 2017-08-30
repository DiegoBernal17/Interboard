<?php
  session_start([
    'cookie_lifetime' => 86400,
]);
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)) . DS);
  define('URL', "http://localhost/Interboard/");
  define('LOGGED', isset($_SESSION['LOGGED']));
  define('USERNAME', $_SESSION['LOGGED']);

  require_once "Config/Autoload.php";
  Config\Autoload::run();
  require_once "Views/template.php";
  Config\Router::run(new Config\Request());
 ?>
