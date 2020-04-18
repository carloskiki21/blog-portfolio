<?php
/*
EL NÚCLEO DE LA APLICACIÓN!
*/
session_start();

//Constantes de conexión
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');

//Constantes de la APP

define('HTML_DIR', 'html/');
define('APP_TITTLE', 'Woot woot!');
define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' ');
define('APP_URL', 'http://localhost/blog-portfolio/');

/*
Constantes de PHPMailer
define('PHPMAILER_HOST','');
define('PHPMAILER_USER','');
define('PHPMAILER_PASS','');
define('PHPMAILER_PORT',);
*/

//Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Users.php');

$_users = Users();

?>
