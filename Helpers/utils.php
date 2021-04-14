<?php

class Utils {

    public static function base_url() {
        return URL_VIEW;
    }

    public static function media() {
        return URL_VIEW . "Assets";
    }

    public static function deleteSession($name) {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function mostrarError($errores, $campo) {
        $alerta = '';
        if (isset($errores[$campo]) && !empty($campo)) {
            $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
        }
        return $alerta;
    }

    public static function borrarErrores() {
        $_SESSION['errores'] = null;
        $borrado = session_unset();
        return $borrado;
    }

    public static function showCategorias() {
        require_once 'Models/CategoriaModel.php';
        $categoria = new Categoria();
        $categorias = $categoria->lista();
        return $categorias;
    }

}
