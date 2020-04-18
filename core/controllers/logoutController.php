<?php

/**
 * This is the description for the class below.
 *
 * @package    my-package
 * @subpackage my-subpackage
 * @author     my-name
 * @version    my-version
 * @category    my-category
 * @license    my-license
 * ...
 */

unset($_SESSION['app_id'], $_SESSION['cantidad_usuarios'], $_SESSION['users']);
header('location: ?view=index');

?>