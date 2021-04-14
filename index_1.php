<?php

session_start();
require_once 'autoload.php';
require_once 'Config/parameter.php';
if (isset($_SESSION["usuario"])) {
    require_once 'Config/db.php';
    require_once 'Helpers/utils.php';
    require_once 'Views/Template/header_admin.php';
    require_once 'Views/Template/menu_sidebar_admin.php';

    function show_error() {
        $error = new errorController();
        $error->index();
    }

    if (isset($_GET['controller'])) {
        $nombre_controlador = $_GET['controller'] . 'controller';
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $nombre_controlador = controller_default;
    } else {
        show_error();
        exit();
    }

    if (class_exists($nombre_controlador)) {
        $controlador = new $nombre_controlador();

        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
            $action_default = action_default;
            $controlador->$action_default();
        } else {
            show_error();
        }
    } else {
        show_error();
    }


    require_once 'Views/Template/footer_admin.php';
} else {
    require_once 'Login/index.php';
}
?>


