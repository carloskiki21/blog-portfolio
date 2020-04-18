<?php

/**
 * Login functionality.
 *
 * @package    my-package
 * @subpackage my-subpackage
 * @author     my-name
 * @version    my-version
 * ...
 */

if (!empty($_POST['user']) and !empty($_POST['pass'])) {

    $db = new Conexion();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = $db->query("SELECT id FROM users WHERE user='$user' AND pass='$pass' LIMIT 1;");

    if ($db->rows($sql) > 0) {
        $_SESSION['app_id'] = $db->recorrer($sql)[0];
        echo 1;
    } else {
        echo 'datos incorrectos';
    }
    $db->liberar($sql);
    $db->close();

} else {
    echo 'Rellene los campos';
}